<?php
//vendor niemals commiten
namespace Kiki\ComposerQrcode;
require('../vendor/autoload.php');
class Owner
{
private string $name;
private string $telephonnumber;

    /**
     * @param string $name
     * @param string $telephonnumber
     */
    public function __construct(string $name, string $telephonnumber)
    {
        $this->name = $name;
        $this->telephonnumber = $telephonnumber;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTelephonnumber(): string
    {
        return $this->telephonnumber;
    }

    /**
     * @param string $telephonnumber
     */
    public function setTelephonnumber(string $telephonnumber): void
    {
        $this->telephonnumber = $telephonnumber;
    }

    public function __toString()
    {
        //return $this->getName().' ('. $this->getTelephonnumber().')';
        return "<a href=\"tel:06764428228\">" . $this->getTelephonnumber() . "</a>";
    }
}