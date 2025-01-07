<?php

namespace App\Repository;

use App\Entity\GroupVists;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GroupVists|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupVists|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupVists[]    findAll()
 * @method GroupVists[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupVistsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupVists::class);
    }

    // /**
    //  * @return GroupVists[] Returns an array of GroupVists objects
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
    public function findOneBySomeField($value): ?GroupVists
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
