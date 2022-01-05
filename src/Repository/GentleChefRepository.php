<?php

namespace App\Repository;

use App\Entity\GentleChef;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GentleChef|null find($id, $lockMode = null, $lockVersion = null)
 * @method GentleChef|null findOneBy(array $criteria, array $orderBy = null)
 * @method GentleChef[]    findAll()
 * @method GentleChef[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GentleChefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GentleChef::class);
    }

    // /**
    //  * @return GentleChef[] Returns an array of GentleChef objects
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
    public function findOneBySomeField($value): ?GentleChef
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
