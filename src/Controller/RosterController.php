<?php
// src/Controller/RosterController.php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RosterMember;
use App\Repository\RosterMemberRepository;

class RosterController extends AbstractController
{
    /**
     * @Route("/roster", name="roster")
     */
	#[Route('/roster')]
    public function roster(EntityManagerInterface $entityManager)
    {
        // Use the entity manager to retrieve data
        $repository = $entityManager->getRepository(RosterMember::class);
        $rosterMembers = $repository->findAll();

        // ... rest of your controller logic

        return $this->render('roster/index.html.twig', [
            'rosterMembers' => $rosterMembers,
        ]);
    }

    // ... other controller methods
}

?>