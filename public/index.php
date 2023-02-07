<?php

use App\Entity\ProductEntity;
use App\Repository\ProductRepository;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../bootstrap.php';

// Création d'un produit
// $product = new ProductEntity();
// $product->setName('premier nom');
// $entityManager->persist($product);
// $entityManager->flush();

$productRepo = new ProductRepository($entityManager);

$products = $productRepo->findThreeProdcuts();
$product = $products[0];

echo $product->getName();
echo 'hello';