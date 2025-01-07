<?php

namespace App\Repository;

use App\Entity\GalleryComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GalleryComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method GalleryComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method GalleryComment[]    findAll()
 * @method GalleryComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GalleryCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GalleryComment::class);
    }

    // /**
    //  * @return GalleryComment[] Returns an array of GalleryComment objects
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
    public function findOneBySomeField($value): ?GalleryComment
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
