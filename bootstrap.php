<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//$paths = array('/home/ratnadeep/workspace/olxsa-atlas-web-env-dev/vendor/naspersclassifieds-regional/olxsa-atlas-web/src/models/Entities');
$paths = [
    '/home/ratnadeep/workspace/ORM/src'
];
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'cImzf6aodMMulOxlP7WEbCO7DjuD2T8e',
    'dbname'   => 'doctrinetest',
    'port'      => '4306',
    'host'      => '127.0.0.1'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);