<?php

namespace App\Repository;

use App\Entity\Category;
use DateTime;
use Doctrine\ORM\EntityRepository;

class JobRepository extends EntityRepository
{
    public function findActiveByCategory(Category $category)
    {
        return $this->createQueryBuilder('j')
            ->where('j.category = :category')
            ->andWhere('j.expiresAt >= :date')
            ->setParameter('category', $category)
            ->setParameter('date', new DateTime())
            ->getQuery()
            ->getResult();
    }
}
