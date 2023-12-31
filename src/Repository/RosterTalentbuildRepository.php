<?php

namespace App\Repository;

use App\Entity\RosterTalentbuild;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RosterTalentbuild>
 *
 * @method RosterTalentbuild|null find($id, $lockMode = null, $lockVersion = null)
 * @method RosterTalentbuild|null findOneBy(array $criteria, array $orderBy = null)
 * @method RosterTalentbuild[]    findAll()
 * @method RosterTalentbuild[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RosterTalentbuildRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RosterTalentbuild::class);
    }

//    /**
//     * @return RosterTalentbuild[] Returns an array of RosterTalentbuild objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RosterTalentbuild
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
