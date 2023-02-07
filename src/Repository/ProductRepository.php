<?php

namespace App\Repository;

use App\Entity\ProductEntity;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

require_once __DIR__.'/../../bootstrap.php';

class ProductRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $meta = new ClassMetadata(ProductEntity::class);
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