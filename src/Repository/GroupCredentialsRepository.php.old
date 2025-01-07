<?php

namespace App\Repository;

use App\Entity\GroupCredentials;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GroupCredentials|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupCredentials|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupCredentials[]    findAll()
 * @method GroupCredentials[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupCredentialsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GroupCredentials::class);
    }

    // /**
    //  * @return GroupCredentials[] Returns an array of GroupCredentials objects
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
    public function findOneBySomeField($value): ?GroupCredentials
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
