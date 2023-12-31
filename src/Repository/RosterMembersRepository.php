<?php

namespace App\Repository;

use App\Entity\RosterMembers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RosterMembers>
 *
 * @method RosterMembers|null find($id, $lockMode = null, $lockVersion = null)
 * @method RosterMembers|null findOneBy(array $criteria, array $orderBy = null)
 * @method RosterMembers[]    findAll()
 * @method RosterMembers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RosterMembersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RosterMembers::class);
    }

//    /**
//     * @return RosterMembers[] Returns an array of RosterMembers objects
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

//    public function findOneBySomeField($value): ?RosterMembers
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
