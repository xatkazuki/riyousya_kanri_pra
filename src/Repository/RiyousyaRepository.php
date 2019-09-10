<?php

namespace App\Repository;

use App\Entity\Riyousya;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Riyousya|null find($id, $lockMode = null, $lockVersion = null)
 * @method Riyousya|null findOneBy(array $criteria, array $orderBy = null)
 * @method Riyousya[]    findAll()
 * @method Riyousya[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RiyousyaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Riyousya::class);
    }

    // /**
    //  * @return Riyousya[] Returns an array of Riyousya objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Riyousya
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
