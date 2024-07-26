<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSetNom(): void
    {
        $user = new User();
        $user->setNom("un nom");
        $this->assertEquals($user->getNom(), "un nom", "le nom n'a pas été remplis correctement.");
    }

    public function testSetPrenom(): void
    {
        $user = new User();
        $user->setPrenom("un prénom");
        $this->assertEquals($user->getPrenom(), "un prénom", "le prénom n'a pas été remplis correctement.");
    }

    public function testSetEmail(): void
    {
        $user = new User();
        $user->setEmail("un email");
        $this->assertEquals($user->getEmail(), "un email", "l'email n'a pas été remplis correctement.");
    }

    public function testSetPassword(): void
    {
        $user = new User();
        $user->setPassword("un password");
        $this->assertEquals($user->getPassword(), "un password", "le password n'a pas été remplis correctement.");
    }
    
}

