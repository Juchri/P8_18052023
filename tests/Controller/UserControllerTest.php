<?php

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testHomepage()
    {
        $this->client->request(Request::METHOD_GET, '/login');

        $response = $this->client->getResponse();
        $statusCode = $response->getStatusCode();

        $this->assertSame(Response::HTTP_OK, $statusCode);
    }
}


/* <?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Task2ControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testGoToTasks()
    {
        // Accéder à la page de connexion
        $crawler = $this->client->request(Request::METHOD_GET, '/login');

        // Récupérer le formulaire de connexion
        $form = $crawler->selectButton('Se connecter')->form();

        // Remplir les champs du formulaire
        $form['username'] = 'admin';
        $form['password'] = 'admin';

        // Soumettre le formulaire
        $crawler = $this->client->submit($form);

        // Vérifier la redirection après la soumission du formulaire
        $this->assertSame(Response::HTTP_FOUND, $this->client->getResponse()->getStatusCode());

        // Accéder à la page des tâches après la connexion
        $crawler = $this->client->followRedirect();

        // Vérifier que la page des tâches est accessible
        $this->assertSame(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
    }
}
*/