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