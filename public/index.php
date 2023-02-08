<?php

use App\Entity\ProductEntity;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/bootstrap.php';

// Création d'un produit
// $product = new ProductEntity();
// $product->setName('premier nom');
// $entityManager->persist($product);
// $entityManager->flush();

// Création d'un user
// $user = new User();
// $user->setName('Pseudo');
// $user->setAge(25);
// $entityManager->persist($user);
// $entityManager->flush();

$userRepo = new UserRepository($entityManager);
$users = $userRepo->findAll();

var_dump($users);


$productRepo = new ProductRepository($entityManager);

$products = $productRepo->findThreeProdcuts();
$product = $products[0];

echo $product->getName();
echo 'hello';