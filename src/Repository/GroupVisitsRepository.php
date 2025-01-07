<?php

namespace App\Repository;

use App\Entity\GroupVisits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GroupVisits|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupVisits|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupVisits[]    findAll()
 * @method GroupVisits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupVisitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupVisits::class);
    }

    // /**
    //  * @return GroupVisits[] Returns an array of GroupVisits objects
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
    public function findOneBySomeField($value): ?GroupVisits
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
