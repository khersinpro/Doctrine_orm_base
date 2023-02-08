# Doctrine_orm_base

Utilisation de Doctrine ORM + DBAL pour la création d'entitées et la récupération du queryBuilder
Ajout du package migrations pour la gestion des migrations en base de données

// *** MIGRATIONS
// Générer une migration et update la BDD avec la création d'une entity 
// ./vendor/bin/doctrine-migrations diff => la commande regarde si il y a de nouvelle entity et créer une migration
// ./vendor/bin/doctrine-migrations migrate => migre les changements en BDD
