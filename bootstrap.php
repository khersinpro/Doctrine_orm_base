<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__.'/vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__.'/src/Entity'],
    isDevMode: true,
);

// configuring the database connection
$db_connexion = require_once __DIR__.'/configs/db_connexion.php';
$connection = DriverManager::getConnection($db_connexion, $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
