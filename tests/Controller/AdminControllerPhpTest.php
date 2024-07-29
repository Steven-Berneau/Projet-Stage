<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class AdminControllerPhpTest extends WebTestCase
{
    public function testAdmin_non_connecte_1(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/admin');
        $this->assertResponseRedirects();
    }
    public function testAdmin_connecte_2(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);


        $crawler = $client->request('GET', '/admin');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorExists('img', $message = 'image admin');
    }
}
