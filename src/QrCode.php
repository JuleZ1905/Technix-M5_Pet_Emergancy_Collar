<?php

namespace Kiki\ComposerQrcode;
require('../vendor/autoload.php');
use Kiki\ComposerQrcode\Owner;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;


class QrCode
{
    private string $dataURI;

    function __construct(Owner $owner)
    {
        $this->create_QrCode($owner);
    }

    /**
     * Get the value of dataURI
     */
    public function getDataURI()
    {
        return $this->dataURI;
    }

    function create_QrCode(Owner $owner)
    {

        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($owner)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->build();

            $this->dataURI = $result->getDataUri();
    }
}
