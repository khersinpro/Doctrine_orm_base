<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

require_once __DIR__.'/../../config/bootstrap.php';

class ProductRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $meta = new ClassMetadata(Product::class);
        parent::__construct($entityManager, $meta);
    }

    public function findThreeProdcuts()
    {
        return $this->createQueryBuilder('product')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }
}