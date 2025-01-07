<?php

namespace App\Repository;

use App\Entity\AlbumA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AlbumA|null find($id, $lockMode = null, $lockVersion = null)
 * @method AlbumA|null findOneBy(array $criteria, array $orderBy = null)
 * @method AlbumA[]    findAll()
 * @method AlbumA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlbumARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AlbumA::class);
    }

    // /**
    //  * @return AlbumA[] Returns an array of AlbumA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AlbumA
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
