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
    <link rel="stylesheet" media="print" href="css/print.css">
</head>

<body>
    <main>
        <h1 class="header">Pet Emergancy Collar</h1>
        <h1 class="print-header">Scan if found</h1>
        <div class="section">
            <div class="left">
                <form class="form" method="post" action="index.php">
                    <input type="text" id="name" name="name" value="" placeholder="Vorname" required><br>
                    <input type="text" id="last-name" name="last-name" value="" placeholder="Nachname" required><br>
                    <input type="text" id="phone-number" name="phone-number" value="" placeholder="Telefonnummer" required><br>
                    <input type="text" id="infos" name="infos" value="" placeholder="Weitere Infos..." required><br>
                    <input class="btn" type="submit" value="Submit" name="submit">
            </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $vorname = $_POST["name"];
                $nachname = $_POST["last-name"];
                $tel = $_POST["phone-number"];
                $infos = $_POST["infos"];

                $owner = new Owner($vorname, $nachname, $tel, $infos);
                $qr = new QrCode($owner);
                if ($owner->checkPhoneNumber()) { ?>
                    <div class="vertical-line"></div>
                    <div class="qrCode-section">
                        <img src='<?php echo $qr->getDataURI() ?>'>
                        <a href="<?php echo $qr->getDataURI() ?>" download="qr_code">Download QrCode!</a>
                    </div>
                <?php
                } else { ?>
                    <p>
                        Invalid input entered!
                    </p>
                <?php
                }
                ?>
            <?php

            }
            ?>
        </div>
    </main>
</body>

</html>