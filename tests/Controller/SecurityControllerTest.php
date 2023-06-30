<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityControllerTest extends WebTestCase
{

    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testLogin()
    {
        $client = static::createClient();

        // Accède à la page de connexion
        $crawler = $client->request('GET', '/login');

        $usernametotest =  'admin';

        // Remplis le formulaire avec des identifiants valides
        $form = $crawler->selectButton('Se connecter')->form();
        $form['_username'] = $usernametotest;
        $form['_password'] = 'admin';

        // Soumets le formulaire
        $crawler = $client->submit($form);

        // Vérifie la redirection après connexion réussie
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertEquals('http://localhost/', $client->getResponse()->headers->get('Location'));

        // Vérifie la présence d'un message de bienvenue dans la page d'accueil
        $crawler = $client->followRedirect();
        $this->assertStringContainsStringIgnoringCase( $usernametotest, $crawler->filter('.welcome-message')->text());
    }

    public function testLoginCheck()
    {
        $this->client->request(Request::METHOD_GET, '/login_check');

        $response = $this->client->getResponse();
        $statusCode = $response->getStatusCode();

        $this->assertSame(500, $response->getStatusCode());

    }

    public function testLogoutCheck()
    {
        $this->client->request(Request::METHOD_GET, '/logout_check');

        $response = $this->client->getResponse();
        $statusCode = $response->getStatusCode();

        $this->assertSame(404, $response->getStatusCode());

    }

}


//Next step : faire un test qui ajoute un utilisateur puis se connecte avec !