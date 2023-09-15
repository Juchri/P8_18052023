ToDoList ✅
========

Improve an existing project !
https://openclassrooms.com/projects/ameliorer-un-projet-existant-1


## How to install this project ?

### 1. Go back to Php 7.2

`composer install`

If you are running a php version > 7.4.9, please change the settings with :

To do so, you can install [Homebrew](https://brew.sh/), then :

`brew tap shivammathur/php`
`brew install shivammathur/php/php@7.2`

To unload php 8.2 and link php 7.2 : 
`brew unlink php@8.2`
`brew link php@7.2`

You can do the opposite if you want to go back to php 8.2 or any other version

### 2. Update to Symfony 3.4 :
`composer require symfony/symfony:3.4 --with-all-dependencies`


### 3. Create the Database


To start php now and restart at login:

Create a .env file with all the different usual variables :

To run this project, you will need to add the following environment variables to your .env file

`APP_ENV`
`APP_SECRET`
`DATABASE_URL`

[Database structure to download](./toDoList.sql)


### 4. Install PhpUnit

`composer require --dev phpunit/phpunit ^8`


`brew install php70-xdebug`

Install Xdebug :
`pecl install xdebug-3.1.6`

Launch the coverage :
`XDEBUG_MODE=coverage vendor/bin/phpunit --coverage-html public/test-coverage`
`ls -lah public/test-coverage`

Launch unit test :
`vendor/bin/phpunit`

(and for only one method at a time) :
`vendor/bin/phpunit --filter=testDefault`

### 5. Documentation thanks to phpDocumentor

`php phpDocumentor.phar run -d src -t doc`

phpDocumentor v3.1.1 :
`php phpDocumentor.phar phpDocumentor v3.1.1`

To download phpDocumentor.phar (var 3.1.1): https://github.com/phpDocumentor/phpDocumentor/releases/tag/v3.1.1


[![Codacy Badge](https://app.codacy.com/project/badge/Grade/6409db3962814f1caec254713b0e560c)](https://app.codacy.com/gh/Juchri/P8_18052023/dashboard?utm_source=gh&utm_medium=referral&utm_content=&utm_campaign=Badge_grade)
