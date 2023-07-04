<?php 

namespace App\Tests\Controller;

use Symfony\Bridge\Twig\Node\DumpNode;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\TaskType;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use App\Tests\Controller\SecurityControllerTest;
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
        $this->assertStringContainsStringIgnoringCase('Liste', $client->getResponse()->getContent());

    }

    public function testCreateAction()
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

        $crawler = $client->request('GET', '/tasks/create');

        $form2 = $crawler->selectButton('Ajouter')->form();

        $form2['task']['title'] = 'testoriginal';
        $form2['task']['content'] = 'testoriginal';

        // Soumets le formulaire
        $crawler = $client->submit($form2);

        // Ne veut pas soumettre le formulaire (et je ne sais pas pourquoi, un problème de user ?)

        /*
        $form2['title'] = 'test';
        $form2['content'] = 'test';
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        */

    }

    public function testCreateAction2()
    {
        $client = static::createClient();

        // Simuler une connexion d'utilisateur
        $user = new User; // Créez un utilisateur ou utilisez un utilisateur existant
        $crawler = $client->request('GET', '/login');
        // Soumettez le formulaire de connexion avec les informations d'identification valides
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'admin',
            '_password' => 'admin',
        ]);
        $client->submit($form);

        $crawler = $client->request('GET', '/tasks/create');

        // Obtenez le formulaire à partir du crawler
        $form = $crawler->filter('form[name=task]')->form();

        $form['task[title]'] = 'Ma nouvelle tâche';
        $form['task[content]'] = 'Contenu de ma nouvelle tâche';

        // Soumettez le formulaire de création de tâche
        $client->submit($form);
        $task = new Task();
        $task->setUser($user);

        // Vérifiez la réponse HTTP
        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());

        // Vérifiez que la tâche a été ajoutée en base de données
        $entityManager = $client->getContainer()->get('doctrine.orm.entity_manager');
        $task = $entityManager->getRepository(Task::class)->findOneBy(['title' => 'Ma nouvelle tâche']);
        $this->assertNotNull($task);
        $this->assertEquals('Contenu de ma nouvelle tâche', $task->getContent());
        $this->assertEquals($user, $task->getUser());

        // Vérifiez la redirection après la création de la tâche
        $this->assertEquals('/tasks', $client->getResponse()->headers->get('Location'));
    }

    public function testCreateAction3()
{
    // Création d'un utilisateur fictif pour le test
    $user = new User();

    // Création d'un objet Task fictif avec des données valides
    $taskData = [
        'title' => 'Test Task',
        'content' => 'This is a test task',
    ];

    $client = static::createClient();

    // Se connecter avec un utilisateur fictif
    $user = new User; // Créez un utilisateur ou utilisez un utilisateur existant
    $crawler = $client->request('GET', '/login');
    // Soumettez le formulaire de connexion avec les informations d'identification valides
    $form = $crawler->selectButton('Se connecter')->form([
        '_username' => 'admin',
        '_password' => 'admin',
    ]);
    $client->submit($form);

    // Accéder à la page de création de tâche
    $crawler = $client->request('GET', '/tasks/create');

    // Vérifier que la page est accessible
    $this->assertSame(200, $client->getResponse()->getStatusCode());

    // Remplir le formulaire avec les données valides
    $form = $crawler->selectButton('Ajouter')->form();
    $form['task[title]'] = $taskData['title'];
    $form['task[content]'] = $taskData['content'];

    // Soumettre le formulaire
    $client->submit($form);

    // Vérifier la redirection après soumission du formulaire
    $this->assertSame(302, $client->getResponse()->getStatusCode());
    $this->assertSame('http://localhost/task_list', $client->getResponse()->headers->get('Location'));

    // Vérifier que la tâche a été correctement enregistrée en base de données
    $em = $client->getContainer()->get('doctrine')->getManager();
    $task = $em->getRepository(Task::class)->findOneBy(['title' => $taskData['title']]);
    $this->assertInstanceOf(Task::class, $task);
    $this->assertSame($user, $task->getUser());
    $this->assertSame($taskData['content'], $task->getContent());

    // Vérifier le message flash
    $crawler = $client->followRedirect();
    $flashMessage = $crawler->filter('.flash-messages .flash-message')->text();
    $this->assertSame('La tâche a été bien été ajoutée.', $flashMessage);
}

}