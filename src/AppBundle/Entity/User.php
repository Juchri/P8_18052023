<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Entity class representing a user.
 *
 * This class represents a user with properties such as ID, username, email, password, and roles.
 *
 * @ORM\Table("user")
 * @ORM\Entity
 * @UniqueEntity("email")
 */
class User implements UserInterface
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     * @Assert\NotBlank(message="You must enter a username.")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     * @Assert\NotBlank(message="You must enter an email address.")
     * @Assert\Email(message="The email format is not correct.")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * User constructor.
     */
    public function __construct()
    {
        // Initialize roles as an empty array by default
        $this->roles = [];
    }

    // Getters and setters for properties...

    /**
     * Get the salt for the user.
     *
     * @return string|null Returns null for the salt (not used).
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Get the roles assigned to the user.
     *
     * @return array Returns an array of roles.
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Erase sensitive data from the user.
     *
     * This method is used to erase sensitive data from the user, such as the password.
     */
    public function eraseCredentials()
    {
        // ...
    }
}
