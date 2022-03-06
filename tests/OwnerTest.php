<?php
namespace Kiki\ComposerQrcode\Tests;

require_once('../vendor/autoload.php');

use Kiki\ComposerQrcode\Owner;
use PHPUnit\Framework\TestCase;


class OwnerTest extends TestCase
{
    
    /** @test */
    public function test_Owner()
    {
        $testOwner1 = new Owner("Julian", "Zangl", "06764428228", "Hallo bitte ruft mich an");    
        $testOwner2 = new Owner("Katharina", "Jaros", "06506740601", "OMG wenn ihr das lest bitte ruft an");

        $this->assertEquals("Julian", $testOwner1->getVorname(), "Yay alles gut");
    }

}
