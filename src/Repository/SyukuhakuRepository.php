<?php

namespace App\Repository;

use App\Entity\Syukuhaku;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Syukuhaku|null find($id, $lockMode = null, $lockVersion = null)
 * @method Syukuhaku|null findOneBy(array $criteria, array $orderBy = null)
 * @method Syukuhaku[]    findAll()
 * @method Syukuhaku[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SyukuhakuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Syukuhaku::class);
    }

    // /**
    //  * @return Syukuhaku[] Returns an array of Syukuhaku objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Syukuhaku
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
