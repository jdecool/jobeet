<?php

namespace App\Controller;

use App\Entity\Job;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class JobController extends AbstractController
{
    public function index(EntityManagerInterface $em): Response
    {
        $jobs = $em->getRepository(Job::class)->findAll();

        return $this->render('job/index.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    public function show(EntityManagerInterface $em, int $id, string $company, string $location, string $position) : Response
    {
        // dans un projet réel, il sera nécessaire de faire une requête permettant de vérifier que tous les éléments
        // correspondent à une offre d'emploi valide
        $job = $em->getRepository(Job::class)->find($id);
        if (null === $job) {
            throw new NotFoundHttpException();
        }

        return $this->render('job/show.html.twig', [
            'job' => $job,
        ]);
    }
}
