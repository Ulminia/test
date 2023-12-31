<?php
// src/Repository/RosterMemberRepository.php

namespace App\Repository;

use App\Entity\RosterMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class RosterMemberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RosterMember::class);
    }
}
?>