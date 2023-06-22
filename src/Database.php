<?php

use AppBundle\Entity\User;

class Database
{
    private $users = [];

    public function addUser(User $user)
    {
        // Simule l'ajout de l'utilisateur à la base de données
        $this->users[$user->getEmail()] = $user;

        return true; // On suppose que l'ajout est toujours réussi
    }

    public function getUserByEmail($email)
    {
        // Récupère l'utilisateur à partir de l'adresse e-mail
        if (isset($this->users[$email])) {
            return $this->users[$email];
        }

        return null; // Si l'utilisateur n'est pas trouvé
    }

    public function getUsers()
    {
        return $this->users;
    }
}