<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class EvenementControllerPhpTest extends WebTestCase
{
    public function testAdmin_evenement_non_connecte_1(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/gestionAdmin');
        $this->assertResponseRedirects();
    }

    public function testAdmin_evenement_connecte_2(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);


        $crawler = $client->request('GET', '/gestionAdmin/new');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorExists('a', $message = 'Menu Admin');
    }

    public function testAdmin_evenement_connecte_3(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);

        $crawler = $client->request('GET', '/gestionAdmin/3');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorExists('a', $message = 'Editer l\'évènement');
    }
    
    public function testAdmin_evenement_connecte_not_found_3(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);


        $crawler = $client->request('GET', '/gestionAdmin/1');
        $this->assertResponseStatusCodeSame(404);
    }

    
    public function testAdmin_evenement_connecte_4(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);


        $crawler = $client->request('GET', '/gestionAdmin/3/edit');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorExists('a', $message = 'Retour à la liste des évènements');
    }

    public function testAdmin_evenement_connecte_not_found_4(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);


        $crawler = $client->request('GET', '/gestionAdmin/1/edit');
        $this->assertResponseStatusCodeSame(404);
    }

    public function testAdmin_evenement_connecte_5(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('admin@poke.fr');

        // simulate $testUser being logged in
        $client->loginUser($testUser);


        $crawler = $client->request('POST', '/gestionAdmin/3');
        $this->assertResponseStatusCodeSame(303);
        $this->assertResponseRedirects('/gestionAdmin/');
        }
}

