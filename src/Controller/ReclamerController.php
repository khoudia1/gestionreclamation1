<?php

namespace App\Controller;

use App\Entity\Reclamer;
use App\Form\ReclamerType;
use App\Repository\ReclamerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/reclamer")
 */
class ReclamerController extends AbstractController
{
    public function notifications(): Response
    {
        if($this->getUser()->getRoles()[0]=="ROLE_ADMIN"){
        $userFirstName='...';
        $userNotification=['...', '...'];

        return $this->render('reclamer/notification.html.twig',[
            'user_first_name'=>$userFirstName,
            'notifications'=>$userNotification,
            ]);
        }
        
    }


    /**
     * @Route("/", name="reclamer_index", methods={"GET"})
     */

    public function index(ReclamerRepository $reclamerRepository): Response
    {
       //var_dump($this->getUser()->getRoles()[0]);
        if($this->getUser()->getRoles()[0]=="ROLE_ETUDIANT")
        {
            return $this->redirectToRoute('reclamer_index_etudiant');
        }
        else
        {
            return $this->render('reclamer/index.html.twig', [
            'reclamers' => $reclamerRepository->findAll(),
        ]);
         }
    }


    /**
     * @Route("/etudiant", name="reclamer_index_etudiant", methods={"GET"})
     */

    public function indexEtudiant(ReclamerRepository $reclamerRepository): Response
    {

        return $this->render('reclamer/index.html.twig', [
            'reclamers' => $reclamerRepository->findByUser($this->getUser())
        ]);
    }




    /**
     * @Route("/new", name="reclamer_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ETUDIANT")
     */
    public function new(Request $request): Response
    {
        $reclamer = new Reclamer();
        $form = $this->createForm(ReclamerType::class, $reclamer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamer->setUser($this->getUser());
            $reclamer->setDateCreation(new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamer);
            $entityManager->flush();

            return $this->redirectToRoute('reclamer_index');
        }

        return $this->render('reclamer/new.html.twig', [
            'reclamer' => $reclamer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamer_show", methods={"GET"})
     */
    public function show(Reclamer $reclamer): Response
    {
        return $this->render('reclamer/show.html.twig', [
            'reclamer' => $reclamer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamer_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ETUDIANT")
     */
    public function edit(Request $request, Reclamer $reclamer): Response
    {
        $form = $this->createForm(ReclamerType::class, $reclamer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamer_index');
        }

        return $this->render('reclamer/edit.html.twig', [
            'reclamer' => $reclamer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamer_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete(Request $request, Reclamer $reclamer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamer_index');
    }
}
