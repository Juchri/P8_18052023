ToDoList
========

Base du projet #8 : Améliorez un projet existant

https://openclassrooms.com/projects/ameliorer-un-projet-existant-1



`composer install`



SITE_URL=http://127.0.0.1:8888/webEclair/
DB_HOST=localhost
DB_USER=root
DB_PWD=root
DB_NAME=leseclaireuses
ACTIRISE=c11ec3af-9649-5654-a12c-19a8781df93d

secret: todolist

If you are running a php version > 7.4.9, please change the settings with :

` local:php:list `
` echo 7.4.9 > .php-version `

créer une table et la lier au projet

Pour désinstaller :
`brew unlink php@8.2`
`brew link php@8.2` (si besoin de le remettre)

Pour installer php 7.2 :
`brew tap shivammathur/php`
`brew install shivammathur/php/php@7.2`

`brew link php@7.2`

The php.ini and php-fpm.ini file can be found in:
    /usr/local/etc/php/8.2/

To start php now and restart at login:
 `brew services start php`

To copy the database structure :
 `php bin/console d:s:u -f`


Mise à jour vers Symfony 3.4 :
`composer require symfony/symfony:3.4 --with-all-dependencies`



`composer require --dev phpunit/phpunit ^8`



 `vendor/bin/phpunit`


`brew install php70-xdebug`

Disable in php.ini : 
[xdebug]
zend_extension="/Applications/MAMP/bin/php/php7.2.34/lib/php/extensions/no-debug-non-zts-20170718/xdebug.so"
^^

Pour installer Xdebug :
`pecl install xdebug-3.1.6`


Pour lancer le coverage :
`XDEBUG_MODE=coverage vendor/bin/phpunit --coverage-html public/test-coverage`
`ls -lah public/test-coverage`

Pour lancer le test unitaire :
`vendor/bin/phpunit`
(va lancer la suite de tests définie dans le phpunit.xml.dist)

pour ne tester qu'une seule méthode à la fois :
`vendor/bin/phpunit --filter=testDefault`
 vendor/bin/phpunit --filter=testHomepageIsUp

À voir avec Jean-Frédéric :
 1️⃣ Tests fonctionnels => pourquoi ça ne fonctionne pas ?
 2️⃣ Tests unitaires ne fonctionnent pas non plus sur les controllers
 3️⃣ Accéder au username de l'utilisateur dans la liste des classes



pour la documentation :
`php phpDocumentor.phar run -d src -t doc`

phpDocumentor v3.1.1 :
`php phpDocumentor.phar phpDocumentor v3.1.1`
To download phpDocumentor.phar (var 3.1.1): https://github.com/phpDocumentor/phpDocumentor/releases/tag/v3.1.1

     public function testCreateAction()
    {
        $client = static::createClient();

        $securityTest = new SecurityControllerTest();
        $loginSuccess = $securityTest->testLogin($client);

        // Vérifie si le test de connexion a réussi
        if ($loginSuccess) {
            $response = $client->getResponse();

            // Vérifie si une réponse a été récupérée
            if ($response) {
            $crawler = $client->request('GET', '/tasks/create');
            $this->assertEquals(200, $client->getResponse()->getStatusCode());

            // Remplis le formulaire avec des identifiants valides
            $form = $crawler->selectButton('Ajouter')->form();
            $form['title'] = 'test';
            $form['content'] = 'test';

             // Vérifie la redirection après connexion réussie
            $this->assertEquals(200, $client->getResponse()->getStatusCode());
            $this->assertEquals('http://localhost/', $client->getResponse()->headers->get('Location'));

            }
        }
    }