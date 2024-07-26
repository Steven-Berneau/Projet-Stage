<?php

namespace App\Tests;

use App\Entity\Evenement;
use PHPUnit\Framework\TestCase;

class EvenementTest extends TestCase
{
    public function testSetName(): void
    {
        $evenement = new Evenement();
        $evenement->setName("un nom");
        $this->assertEquals($evenement->getName(), "un nom", "le nom n'a pas été remplis correctement.");
    }

    public function testSetDescription(): void
    {
        $evenement = new Evenement();
        $evenement->setDescription("une description");
        $this->assertEquals($evenement->getDescription(), "une description", "la description n'a pas été remplis correctement.");
    }

    public function testSetLieux(): void
    {
        $evenement = new Evenement();
        $evenement->setLieux("un lieux");
        $this->assertEquals($evenement->getLieux(), "un lieux", "le lieux n'a pas été remplis correctement.");
    }
}
