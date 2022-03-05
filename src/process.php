<?php

namespace Kiki\ComposerQrcode;
require('../vendor/autoload.php');

use Kiki\ComposerQrcode\Owner;
use Kiki\ComposerQrcode\QrCode;

if(isset($_POST["lname"])) {
    $tel = $_POST["number"];
    $name = $_POST["lname"];
    echo "Telefonnummer: $tel \nName: $name";

    $owner = new Owner($name, $tel);
    $qr = new QrCode($owner);
    ?>

    <img src='<?php echo $qr->getDataURI()?>'>
    <?php
}



