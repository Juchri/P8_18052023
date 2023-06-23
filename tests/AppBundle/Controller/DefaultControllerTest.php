<?php declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\Kernel;

class DefaultControllerTest extends WebTestCase
{
    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }

    public function testIndexAction()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $response = $client->getResponse();

        if ($response->isRedirection()) {
            // La réponse est une redirection
            $crawler = $client->followRedirect();

            // Récupérer le code de réponse de la redirection finale
            $finalResponse = $client->getResponse();
            $statusCode = $finalResponse->getStatusCode();

            // Vérifier le code de réponse
            $this->assertTrue($statusCode >= 300 && $statusCode < 400, "La redirection a échoué avec le code de réponse : $statusCode");
        } else {
            // La réponse n'est pas une redirection
            $this->assertSame(200, $response->getStatusCode());
        }

    }


        public function testIndex()
        {
            // Crée un client de test Symfony
            $client = static::createClient();
    
            // Exécute la requête sur la route principale
            $client->request('GET', '/');
    
            // Récupère la réponse du contrôleur
            $response = $client->getResponse();
    
            // Vérifie que le contrôleur a renvoyé une réponse valide
            $this->assertSame(200, $response->getStatusCode());
    
            // Vérifie le contenu de la réponse
            $content = $response->getContent();
            $this->assertStringContainsString('<html>', $content); // Vérifie la présence de la balise <html>
            $this->assertStringContainsString('base_dir', $content); // Vérifie la présence de la variable 'base_dir'
    
            // Effectuez d'autres assertions si nécessaire pour vérifier le comportement de la méthode indexAction()
        }
    
    

}
