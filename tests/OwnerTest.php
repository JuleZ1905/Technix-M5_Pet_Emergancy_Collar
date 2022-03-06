<?php
namespace Kiki\ComposerQrcode\Tests;

use Kiki\ComposerQrcode\Owner;
use PHPUnit\Framework\TestCase;

class OwnerTest extends TestCase
{
    
    /** @test */
    public function test_Owner_true()
    {
        $testOwner1 = new Owner("Julian", "Zangl", "06764428228", "Hallo bitte ruft mich an");    

        $this->assertEquals("Julian", $testOwner1->getVorname());
    }

    public function test_Owner_false()
    {
        $testOwner2 = new Owner("Katharina", "Jaros", "06506740601", "OMG wenn ihr das lest bitte ruft an");

        $this->assertEquals("Julian", $testOwner2->getVorname());
    }

    public function test_PhoneNumber1()
    {
        $testOwner1 = new Owner("Julian", "Zangl", "+43 11 22 333", "Hallo bitte ruft mich an");

        $this->assertTrue($testOwner1->checkPhoneNumber());
    }

    public function test_PhoneNumber2()
    {
        $testOwner2 = new Owner("Katharina", "Jaros", "thiswillfail", "OMG wenn ihr das lest bitte ruft an");

        $this->assertTrue($testOwner2->checkPhoneNumber());
    }
}
