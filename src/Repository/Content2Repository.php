<?php

namespace App\Repository;

use App\Entity\Product\Color;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class Content2Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {   
        parent::__construct($registry, Content2::class);
    }

    /*
    public function findBySomething($value)
    {   
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}

?>
