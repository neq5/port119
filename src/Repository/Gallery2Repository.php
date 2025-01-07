<?php

namespace App\Repository;

use App\Entity\Gallery2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Gallery2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gallery2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gallery2[]    findAll()
 * @method Gallery2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Gallery2Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Gallery2::class);
    }

    // /**
    //  * @return Gallery2[] Returns an array of Gallery2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gallery2
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
