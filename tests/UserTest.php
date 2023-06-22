<?php declare(strict_types=1);

namespace App\Tests\Repository;

use App\Entity\Product;
use AppBundle\Entity\User;
use Database;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class UserTest extends TestCase
{
    public function testAddUser()
    {
        // Crée un nouvel utilisateur avec des rôles
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('john.doe@example.com');
        $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
        $user->setPassword('password');

        // Ajoute l'utilisateur à la source de données
        $database = new Database();
        $result = $database->addUser($user);

        // Vérifie si l'ajout de l'utilisateur a réussi
        $this->assertTrue($result);

        // Récupère l'utilisateur depuis la source de données
        $savedUser = $database->getUserByEmail('john.doe@example.com');

        // Vérifie si l'utilisateur existe
        $this->assertInstanceOf(User::class, $savedUser);

        // Vérifie les attributs de l'utilisateur
        $this->assertEquals('John Doe', $savedUser->getUsername());
        $this->assertEquals('john.doe@example.com', $savedUser->getEmail());

        // Vérifie les rôles de l'utilisateur
        $expectedRoles = ['ROLE_ADMIN', 'ROLE_USER'];
        foreach ($expectedRoles as $role) {
            $this->assertContains($role, $savedUser->getRoles(), "L'utilisateur ne possède pas le rôle attendu : $role");
        }
    }

    public function testAdminUser()
    {
        // Crée un nouvel utilisateur avec des rôles
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('john.doe@example.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('password');

        // Ajoute l'utilisateur à la source de données
        $database = new Database();
        $result = $database->addUser($user);

        // Vérifie si l'ajout de l'utilisateur a réussi
        $this->assertTrue($result);

        // Récupère l'utilisateur depuis la source de données
        $savedUser = $database->getUserByEmail('john.doe@example.com');

        // Vérifie si l'utilisateur existe
        $this->assertInstanceOf(User::class, $savedUser);

        // Vérifie les attributs de l'utilisateur
        $this->assertEquals('John Doe', $savedUser->getUsername());
        $this->assertEquals('john.doe@example.com', $savedUser->getEmail());

        // Vérifie les rôles de l'utilisateur
        $expectedRoles = ['ROLE_ADMIN'];
        foreach ($expectedRoles as $role) {
            $this->assertContains($role, $savedUser->getRoles(), "L'utilisateur ne possède pas le rôle attendu : $role");
        }
    }

    public function testStandardUser()
    {
        // Crée un nouvel utilisateur avec des rôles
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('john.doe@example.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('password');


        // Ajoute l'utilisateur à la source de données
        $database = new Database();
        $result = $database->addUser($user);

        // Vérifie si l'ajout de l'utilisateur a réussi
        $this->assertTrue($result);

        // Récupère l'utilisateur depuis la source de données
        $savedUser = $database->getUserByEmail('john.doe@example.com');

        // Vérifie si l'utilisateur existe
        $this->assertInstanceOf(User::class, $savedUser);

        // Vérifie les attributs de l'utilisateur
        $this->assertEquals('John Doe', $savedUser->getUsername());
        $this->assertEquals('john.doe@example.com', $savedUser->getEmail());

        // Vérifie les rôles de l'utilisateur
        $expectedRoles = ['ROLE_USER'];
        foreach ($expectedRoles as $role) {
            $this->assertContains($role, $savedUser->getRoles(), "L'utilisateur ne possède pas le rôle attendu : $role");
        }
    }

    public function testCountUser()
    {
        // Crée un nouvel utilisateur
        $user = new User();
        $user->setUserName('John Doe');
        $user->setPassword('password');
        $user->setEmail('john.doe@example.com');

        // Ajoute l'utilisateur à la source de données (par exemple, une base de données)
        $database = new Database(); // Supposons que vous avez une classe de gestion de la base de données
        $previousCount = count($database->getUsers()); // Récupère le nombre d'utilisateurs avant l'ajout

        // Ajoute l'utilisateur à la base de données
        $result = $database->addUser($user);

        // Vérifie si l'ajout de l'utilisateur a réussi
        $this->assertTrue($result);

        // Récupère le nombre d'utilisateurs après l'ajout
        $currentCount = count($database->getUsers());

        // Vérifie si le nombre d'utilisateurs a augmenté de 1
        $this->assertCount($previousCount + 1, $database->getUsers());
    }

    public function testGetUsers()
    {
        // Crée quelques utilisateurs fictifs
        $user1 = new User();
        $user1->setUserName('John Doe');
        $user1->setPassword('password');
        $user1->setEmail('john.doe@example.com');

        $user2 = new User();
        $user2->setUserName('Jane Smith');
        $user2->setPassword('password');
        $user2->setEmail('jane.smith@example.com');

        // Ajoute les utilisateurs à la source de données
        $database = new Database();
        $database->addUser($user1);
        $database->addUser($user2);

        // Récupère la liste des utilisateurs
        $users = $database->getUsers();

        // Vérifie si la liste contient les utilisateurs ajoutés
        $this->assertCount(2, $users);
        $this->assertContains($user1, $users);
        $this->assertContains($user2, $users);
    }

    public function testAddUserWithDuplicateUsername()
    {
        // Crée un nouvel utilisateur avec un nom d'utilisateur unique
        $user1 = new User();
        $user1->setUsername('JohnDoe');
        $user1->setEmail('john.doe@example.com');

        // Ajoute le premier utilisateur à la source de données
        $database = new Database();
        $result = $database->addUser($user1);

        // Vérifie si l'ajout du premier utilisateur a réussi
        $this->assertTrue($result);

        // Crée un deuxième utilisateur avec le même nom d'utilisateur
        $user2 = new User();
        $user2->setUsername('JohnDoe'); // Utilise le même nom d'utilisateur
        $user2->setEmail('johndoe@example.com');

        // Essaye d'ajouter le deuxième utilisateur à la source de données
        $result = $database->addUser($user2);

        // Vérifie si l'ajout du deuxième utilisateur a échoué
        $this->assertFalse($result);
    }
}


//Pour la suite : insérer, récupérer la liste, prendre le dernier, et vérifier les attributs (