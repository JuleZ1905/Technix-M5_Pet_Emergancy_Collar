<?php

namespace Kiki\ComposerQrcode;

require('../vendor/autoload.php');

use Kiki\ComposerQrcode\Owner;
use Kiki\ComposerQrcode\QrCode;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Telefonnummer</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <h1>Pet Emergancy Collar</h1>
        <div class="section">
            <form class="form" method="post" action="index.php">
                <label for="name">Vorname</label><br>
                <input type="text" id="name" name="name" value="" required><br>
                <label for="last-name">Nachname:</label><br>
                <input type="text" id="last-name" name="last-name" value=""><br>
                <label for="phone-number">Telefonnummer:</label><br>
                <input type="text" id="phone-number" name="phone-number" value="" required><br>
                <label for="infos">Weitere Infos:</label><br>
                <input type="text" id="infos" name="infos" value=""><br>
                <input type="submit" value="Submit" name="submit">
            </form>
            <div class="vertical-line"></div>
            <?php
            if (isset($_POST['submit'])) {
                $tel = $_POST["phone-number"];
                $name = $_POST["name"];
                $owner = new Owner($name, $tel);
                $qr = new QrCode($owner);
            ?>

                <img src='<?php echo $qr->getDataURI() ?>'>
            <?php

            }
            ?>
        </div>
    </main>
</body>

</html>