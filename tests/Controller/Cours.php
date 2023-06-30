
<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Tests\SecurityControllerTest;

class FontionnalTest extends WebTestCase

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

    /*
   public function setUp() : void

     {
        $this->client = static::createClient();

        $this->userRepository = $this->client->getContainer()->get('doctrine.orm.entity_manager')->getRepository(User::class);

        // Mettre comme argument de la méthode FindOneByEmail

        // l'e-mail utilisé sur GitHub, ou regarder en base de données quel est l'e-mail renseigné.

        $this->user = $this->userRepository->findOneByEmail('admin@gmail.com');

        $this->urlGenerator = $this->client->getContainer()->get('router');

        $this->client->loginUser($this->user);
   }

    public function testHomepageIsUp()

   {
        $this->client->request(Request::METHOD_GET, $this->urlGenerator->generate('homepage'));

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
   }
   */
}
