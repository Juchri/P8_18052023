<?php 

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class TaskControllerTest extends WebTestCase
{
    private $client;
    private $router;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->router = static::$kernel->getContainer()->get('router');
    }

    public function testListAction()
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

        $crawler = $client->request('GET', '/tasks');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
