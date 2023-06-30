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

    public function testHomepageIsUp()
    {
        $crawler = $this->client->request(Request::METHOD_GET, $this->router->generate('homepage'));
        $this->assertTrue($this->client->getResponse()->isRedirect());
        
        $crawler = $this->client->followRedirect();

        // Vérifier si le crawler a trouvé des nœuds
        $this->assertNotEmpty($crawler->filter('h1'));

        // Vérifier si le texte "Login" est présent dans la balise h1
        $this->assertStringContainsStringIgnoringCase('Login', $crawler->filter('h1')->text());
    }
}
