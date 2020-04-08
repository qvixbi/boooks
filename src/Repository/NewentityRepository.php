<?php

namespace App\Repository;

use App\Entity\Newentity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Newentity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Newentity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Newentity[]    findAll()
 * @method Newentity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewentityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Newentity::class);
    }

    // /**
    //  * @return Newentity[] Returns an array of Newentity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Newentity
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
