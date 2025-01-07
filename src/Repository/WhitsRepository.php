<?php

namespace App\Repository;

use App\Entity\Whits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Whits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Whits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Whits[]    findAll()
 * @method Whits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WhitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Whits::class);
    }

    // /**
    //  * @return Whits[] Returns an array of Whits objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Whits
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
