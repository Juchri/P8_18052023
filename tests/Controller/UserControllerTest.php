<?php

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
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

    public function testUserList()
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

        $crawler = $client->request('GET', '/users');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsStringIgnoringCase('Liste', $client->getResponse()->getContent());

    }

    public function testCreateUser()
    {
        $client = static::createClient();

        // Se connecter avec un utilisateur fictif
        new User; // Créez un utilisateur ou utilisez un utilisateur existant
        $crawler = $client->request('GET', '/login');
        // Soumettez le formulaire de connexion avec les informations d'identification valides
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'admin',
            '_password' => 'admin',
        ]);
        $client->submit($form);

        // Effectuer une requête GET vers l'URL de la fonction create
        $crawler = $client->request('GET', '/users/create');


        $response = $client->getResponse();
        $this->assertTrue($response->isSuccessful(), $response->getContent());

        // Récupérer le formulaire
        $form = $crawler->selectButton('Ajouter')->form();

        // Remplir les champs du formulaire avec les données de test

        $randomBytes = random_bytes(3);
        $randomString = bin2hex($randomBytes);

        // Add the random string to the username
        $username = 'john_doe_' . $randomString;
        $form['user[username]'] = $username;
        $form['user[password][first]'] = 'password123';
        $form['user[password][second]'] = 'password123';
        $form['user[email]'] = $username.'@gmail.com';
        $form['user[roles]'] = ['ROLE_ADMIN'];

        // Soumettre le formulaire en effectuant une requête POST
        $client->submit($form);

        $this->assertTrue($client->getResponse()->isRedirect());

        // Vérifier le message flash affiché
        $crawler = $client->followRedirect();
        $flashMessage = $crawler->filter('.alert-success')->text();
        $this->assertEquals('Superbe ! L\'utilisateur a bien été ajouté.', trim($flashMessage));

        // Vérifier que l'utilisateur est créé en base de données
        $userRepository = $client->getContainer()->get('doctrine')->getRepository(User::class);
        $user = $userRepository->findOneBy(['username' => 'john_doe']);
        $this->assertInstanceOf(User::class, $user);
    }


    public function testEditUser()
    {
        $client = static::createClient();

        // Se connecter avec un utilisateur fictif
        new User; // Créez un utilisateur ou utilisez un utilisateur existant
        $crawler = $client->request('GET', '/login');
        // Soumettez le formulaire de connexion avec les informations d'identification valides
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'admin',
            '_password' => 'admin',
        ]);
        $client->submit($form);

        // Récupérer un user existant depuis la base de données
        $em = $client->getContainer()->get('doctrine')->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['id' => 18]);

        // Accéder à la page d'édition de la tâche
        $crawler = $client->request('GET', '/users/'.$user->getId().'/edit');

        // Vérifier que la réponse est réussie (code 200)
        $this->assertSame(200, $client->getResponse()->getStatusCode());

        // Remplir le formulaire avec de nouvelles valeurs
        $form = $crawler->selectButton('Modifier')->form();

        $randomBytes = random_bytes(3);
        $randomString = bin2hex($randomBytes);

        // Add the random string to the username
        $username = 'jane_smith_' . $randomString;
        $form['user[username]'] = $username;
        $form['user[password][first]'] = 'password123';
        $form['user[password][second]'] = 'password123';
        $form['user[email]'] = $username.'@gmail.com';
        $form['user[roles]'] = ['ROLE_ADMIN'];

        $client->submit($form);

        // Vérifier que le message flash est affiché
        $crawler = $client->followRedirect();

        $flashMessage = $crawler->filter('.alert-success')->text();
        $this->assertStringContainsString('L\'utilisateur a bien été modifié', $flashMessage);

        // Vérifier que les modifications ont été enregistrées en base de données
        $updatedUser = $em->getRepository(User::class)->find($user->getId());
        $this->assertEquals( $username, $updatedUser->getUsername());
        $this->assertEquals( $username.'@gmail.com', $updatedUser->getEmail());

    }
}
