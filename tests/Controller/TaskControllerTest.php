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
        // Création d'un utilisateur fictif pour le test
        $user = new User();

        // Création d'un objet Task fictif avec des données valides
        $taskData = [
            'title' => 'Test Task',
            'content' => 'This is a test task',
        ];

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

        // Effectuez vos tests en vérifiant l'utilisateur connecté
        $currentUser = $client->getContainer()->get('security.token_storage')->getToken()->getUser();
        // Utilisez $currentUser comme utilisateur connecté dans vos assertions et vos tests

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
        $this->assertSame('/tasks', $client->getResponse()->headers->get('Location'));

        // Vérifier que la tâche a été correctement enregistrée en base de données
        $em = $client->getContainer()->get('doctrine')->getManager();
        $task = $em->getRepository(Task::class)->findOneBy(['title' => $taskData['title']]);
        $this->assertInstanceOf(Task::class, $task);
        $this->assertEquals($currentUser, $task->getUser());
        $this->assertStringContainsString($taskData['content'], $task->getContent());

        // Vérifier le message flash
        $crawler = $client->followRedirect();
        $flashMessage = $crawler->filter('.alert-success')->text();
        $this->assertStringContainsString('Superbe', $flashMessage);
    }

    public function testEditTask()
    {
        // Créer un client de test
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

         // Récupérer une tâche existante depuis la base de données
         $em = $client->getContainer()->get('doctrine')->getManager();
         $task = $em->getRepository(Task::class)->findOneBy(['id' => 1]);

        // Accéder à la page d'édition de la tâche
        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/edit');

        // Vérifier que la réponse est réussie (code 200)
        $this->assertSame(200, $client->getResponse()->getStatusCode());

        // Remplir le formulaire avec de nouvelles valeurs
        $form = $crawler->selectButton('Modifier')->form();
        $form['task[title]'] = 'Nouveau titre';
        $form['task[content]'] = 'Nouvelle description';

        // Soumettre le formulaire
        $client->submit($form);

        // Vérifier que le flash message est affiché
        $crawler = $client->followRedirect();
        $flashMessage = $crawler->filter('.alert-success')->text();
        $this->assertStringContainsString('Superbe', $flashMessage);

        // Vérifier que la tâche a été effectivement modifiée en base de données
        $updatedTask = $em->getRepository(Task::class)->findOneBy(['id' => $task->getId()]);
        $this->assertEquals('Nouveau titre', $updatedTask->getTitle());
        $this->assertEquals('Nouvelle description', $updatedTask->getContent());
    }

    public function testEditActionUnauthorized()
    {
        // Créer un client de test
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

        // Récupérer une tâche existante depuis la base de données mais qui n'est pas faite par le même user
        $em = $client->getContainer()->get('doctrine')->getManager();
        $task = $em->getRepository(Task::class)->findOneBy(['id' => 8]);

        // Accéder à la page d'édition de la tâche
        $crawler = $client->request('GET', '/tasks/'.$task->getId().'/edit');

        // Vérifier que le flash message est affiché
        $crawler = $client->followRedirect();
        $flashMessage = $crawler->filter('.alert-danger')->text();
        $this->assertStringContainsString('Oops', $flashMessage);
    }

    public function testToggleTaskAction()
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

        // Récupérer une tâche existante depuis la base de données
        $task = $client->getContainer()->get('doctrine')->getRepository(Task::class)->find(1);

        // Effectuer une requête POST vers l'URL de la fonction toggleTaskAction avec l'ID de la tâche
        $client->request('POST', '/tasks/'.$task->getId().'/toggle');

        // Vérifier que la réponse est une redirection vers la liste des tâches
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertEquals('/tasks', $client->getResponse()->headers->get('location'));

        // Récupérer la tâche mise à jour depuis la base de données
        $updatedTask = $client->getContainer()->get('doctrine')->getRepository(Task::class)->find(1);

        // Vérifier que l'état de la tâche a été inversé
        $this->assertEquals(!$task->isDone(), $updatedTask->isDone());

        // Vérifier le message flash affiché
        $crawler = $client->followRedirect();
        $flashMessage = $crawler->filter('.alert-success')->text();
        $expectedFlashMessage = sprintf('Superbe ! La tâche %s a bien été marquée comme faite.', $updatedTask->getTitle());
        $this->assertEquals($expectedFlashMessage, trim($flashMessage));
    }

    public function testDeleteTaskAction()
    {
    // Créer un client de test
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

    // Créer une nouvelle tâche
    $task = new Task();
    $currentUser = $client->getContainer()->get('security.token_storage')->getToken()->getUser();
    // Définir les propriétés de la tâche selon vos besoins
    $task->setTitle('Tâche à supprimer');
    $task->setContent('Tâche à supprimer');
    $task->setUser($currentUser);

    $em = $client->getContainer()->get('doctrine')->getManager();

    // Persistez et flush la tâche
    $em->persist($task);
    $em->flush();
    $idToDelete = $task->getId();

    // Effectuer une requête POST vers l'URL de la fonction deleteTaskAction avec l'ID de la tâche
    $client->request('POST', '/tasks/'.$idToDelete.'/delete');

     // Vérifier que la réponse est une redirection vers la liste des tâches
     $this->assertEquals(302, $client->getResponse()->getStatusCode());
     $this->assertEquals('/tasks', $client->getResponse()->headers->get('location'));

     // Vérifier que la tâche a été supprimée de la base de données
     $deletedTask = $client->getContainer()->get('doctrine')->getRepository(Task::class)->find($idToDelete);
     $this->assertNull($deletedTask);

     // Vérifier le message flash affiché
     $crawler = $client->followRedirect();
     $flashMessage = $crawler->filter('.alert-success')->text();
     $this->assertEquals('Superbe ! La tâche a bien été supprimée.', trim($flashMessage));
    }

    public function testDeleteTaskActionUnauthorized()
    {
    // Créer un client de test
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

    $idToDelete = 8;
    $client->request('POST', '/tasks/'.$idToDelete.'/delete');

    // Vérifier le message flash affiché
    $crawler = $client->followRedirect();
    $flashMessage = $crawler->filter('.alert-danger')->text();
    $this->assertEquals('Oops ! Cette tâche ne peut être suprimée que par son auteur ou un admin.', trim($flashMessage));

    }
}