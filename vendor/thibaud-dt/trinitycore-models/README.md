TrinityCore Eloquent Models
=======================

[![Latest Stable Version](https://poser.pugx.org/thibaud-dt/trinitycore-auth/version?format=flat)](https://packagist.org/packages/thibaud-dt/trinitycore-auth)
[![Latest Unstable Version](https://poser.pugx.org/thibaud-dt/trinitycore-auth/v/unstable?format=flat)](//packagist.org/packages/thibaud-dt/trinitycore-auth)
[![Total Downloads](https://poser.pugx.org/thibaud-dt/trinitycore-auth/downloads?format=flat)](https://packagist.org/packages/thibaud-dt/trinitycore-auth)
[![License](https://poser.pugx.org/thibaud-dt/trinitycore-auth/license?format=flat)](https://packagist.org/packages/thibaud-dt/trinitycore-auth)

Eloquent Models of TrinityCore 3.3.5 Database.

TrinityCore Database has any relationship between tables. Morever it's split on 3 differents databases : auth, characters and world


Requirements
============

* PHP >= 5.5.9 || 7.0

Installation
============

    composer require thibaud-dt/trinitycore-models


* Add database connection in you config/database.php
```
'connections' => [

        [...]

        'characters' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_CHARACTERS', 'localhost'),
            'database'  => env('DB_DATABASE_CHARACTERS', 'forge'),
            'username'  => env('DB_USERNAME_CHARACTERS', 'forge'),
            'password'  => env('DB_PASSWORD_CHARACTERS', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'world' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_WORLD', 'localhost'),
            'database'  => env('DB_DATABASE_WORLD', 'forge'),
            'username'  => env('DB_USERNAME_WORLD', 'forge'),
            'password'  => env('DB_PASSWORD_WORLD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'auth' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_AUTH', 'localhost'),
            'database'  => env('DB_DATABASE_AUTH', 'forge'),
            'username'  => env('DB_USERNAME_AUTH', 'forge'),
            'password'  => env('DB_PASSWORD_AUTH', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]

        [...]

    ],
```

* Add variable in your .env and configure it
```
DB_HOST_WORLD=localhost
DB_DATABASE_WORLD=world
DB_USERNAME_WORLD=root
DB_PASSWORD_WORLD=root

DB_HOST_CHARACTERS=localhost
DB_DATABASE_CHARACTERS=characters
DB_USERNAME_CHARACTERS=root
DB_PASSWORD_CHARACTERS=root

DB_HOST_AUTH=localhost
DB_DATABASE_AUTH=auth
DB_USERNAME_AUTH=root
DB_PASSWORD_AUTH=root
```

**It's done ! You can now use the package**


Usage
=====

- All models can be use like a Eloquent Model.

TODO
=====
* Write relationships of all tables.. A lot of work to do ! You can help me with pull request ;)

Credits
=======

* The community of [TrinityCore](https://www.trinitycore.org/]) for the awesome work !

Links
=====
* SQL file to create databases : https://github.com/TrinityCore/TrinityCore/releases/tag/TDB335.62

* Wiki of Auth database : https://trinitycore.atlassian.net/wiki/display/tc/Auth
* Wiki of Characters database : https://trinitycore.atlassian.net/wiki/display/tc/Characters
* Wiki of World database : https://trinitycore.atlassian.net/wiki/display/tc/World