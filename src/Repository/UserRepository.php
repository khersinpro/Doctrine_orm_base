<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

require_once __DIR__.'/../../config/bootstrap.php';

class UserRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $meta = new ClassMetadata(User::class);
        parent::__construct($entityManager, $meta);
    }

    public function findThreeUsers()
    {
        return $this->createQueryBuilder('users')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }
}