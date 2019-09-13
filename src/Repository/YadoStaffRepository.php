<?php

namespace App\Repository;

use App\Entity\YadoStaff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method YadoStaff|null find($id, $lockMode = null, $lockVersion = null)
 * @method YadoStaff|null findOneBy(array $criteria, array $orderBy = null)
 * @method YadoStaff[]    findAll()
 * @method YadoStaff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YadoStaffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YadoStaff::class);
    }

    // /**
    //  * @return YadoStaff[] Returns an array of YadoStaff objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('y.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?YadoStaff
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
