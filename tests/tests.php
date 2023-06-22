<?php declare(strict_types=1);

namespace App\Tests\Repository;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class UserTest extends TestCase
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    public function testInsertUser()
    {
        $users = $this->entityManager
        ->getRepository(User::class)
        ->findAll();

        $nb = count($users);

        $user = new User();
        $user->setEmail("testunit@gmail.com");
        $user->setPassword("testunit");
        $user->setUsername("testunit");
        $user->setRoles(["ROLE_ADMIN"]);

        $this->entityManager->flush();

        $users2 = $this->entityManager
        ->getRepository(User::class)
        ->findAll();

        $this->assertSame($nb, count($users2) +1);

        // $this->assertSame('Juliette', $user->setUser('Juliette'));
    }

}

//Pour la suite : insérer, récupérer la liste, prendre le dernier, et vérifier les attributs (