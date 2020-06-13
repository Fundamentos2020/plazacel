<?php
require_once('vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'proyecto',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

/*$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => 'ec2-107-21-226-44.compute-1.amazonaws.com',
    'database'  => 'deebhelp5t33el',
    'username'  => 'sqpfqcvitdvnny',
    'password'  => '5cd4e68b5cc0dd328bd0ba994d3f7c36c7375cd77b282b98950060d4886cea70',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
])*/



// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();