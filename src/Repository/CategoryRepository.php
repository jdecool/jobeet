<?php

declare(strict_types=1);

namespace App\Repository;

use DateTime;
use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findCategoriesWithJobs()
    {
        return $this->createQueryBuilder('c')
            ->join('c.jobs', 'j')
            ->where('j.expiresAt >= :date')
            ->setParameter('date', new DateTime())
            ->getQuery()
            ->getResult();
    }
}
