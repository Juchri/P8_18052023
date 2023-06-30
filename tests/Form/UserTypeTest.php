<?php
/*
namespace App\Tests\Form;

use App\Tests\Controller\SecurityControllerTest;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTypeTest extends WebTestCase
{

    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testRegister()
    {

        $client = static::createClient();

        $securityTest = new SecurityControllerTest();
        $loginSuccess = $securityTest->testLogin($client);

        if ($loginSuccess) {
            $response = $client->getResponse();
       
            if ($response) {
                if ($response->isRedirection()) {
                    $crawler = $client->followRedirect();

                    // Continue testing on the new page
                    $this->assertSame('/users/create', $client->getRequest()->getPathInfo());
                    dump($crawler->html());
                    

                    // Remplis le formulaire avec des identifiants valides
                    $form = $crawler->selectButton('Ajouter')->form();
                    $form['_username'] = 'phpUnit';
                    $form['_password'] = 'phpUnit';
                    $form['_email'] = 'phpUnit@gmail.com';
                    $form['_roles'] = ['ROLE USER'];

                    // Soumets le formulaire
                    $crawler = $client->submit($form);
                } else {
                    $this->fail('The login did not result in a redirect.');
                }
            } else {
                $this->fail('No response received.');
            }
        } else {
            $this->fail('Le test de connexion a échoué.');
        }
    }

    public function testFormSubmission()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/your-route'); // Fais une requête GET pour afficher le formulaire
        $form = $crawler->selectButton('Enregistrer')->form();

        // Remplis les champs du formulaire avec les données de test
        $form['form_field_name'] = 'valeur';
        // ...

        $crawler = $client->submit($form); // Soumets le formulaire

        // Inspecte la réponse en utilisant dump()
        dump($client->getResponse()->getContent());

        // Assertions supplémentaires à effectuer sur la réponse...
    }
}

*/


//Next step : faire un test qui ajoute un utilisateur puis se connecte avec !