<?php

namespace App\Controller;

use App\Entity\Riyousya;
use App\Form\RiyousyaType;
use App\Repository\RiyousyaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/riyousya")
 */
class RiyousyaController extends AbstractController
{
    /**
     * @Route("/", name="riyousya_index", methods={"GET"})
     */
    public function index(RiyousyaRepository $riyousyaRepository): Response
    {
        return $this->render('riyousya/index.html.twig', [
            'riyousyas' => $riyousyaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="riyousya_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $riyousya = new Riyousya();
        $form = $this->createForm(RiyousyaType::class, $riyousya);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($riyousya);
            $entityManager->flush();

            return $this->redirectToRoute('riyousya_index');
        }

        return $this->render('riyousya/new.html.twig', [
            'riyousya' => $riyousya,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="riyousya_show", methods={"GET"})
     */
    public function show(Riyousya $riyousya): Response
    {
        return $this->render('riyousya/show.html.twig', [
            'riyousya' => $riyousya,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="riyousya_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Riyousya $riyousya): Response
    {
        $form = $this->createForm(RiyousyaType::class, $riyousya);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('riyousya_index');
        }

        return $this->render('riyousya/edit.html.twig', [
            'riyousya' => $riyousya,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="riyousya_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Riyousya $riyousya): Response
    {
        if ($this->isCsrfTokenValid('delete'.$riyousya->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($riyousya);
            $entityManager->flush();
        }

        return $this->redirectToRoute('riyousya_index');
    }
}
