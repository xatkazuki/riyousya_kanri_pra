<?php

namespace App\Controller;

use App\Entity\Syukuhaku;
use App\Form\SyukuhakuType;
use App\Repository\SyukuhakuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/syukuhaku")
 */
class SyukuhakuController extends AbstractController
{
    /**
     * @Route("/", name="syukuhaku_index", methods={"GET"})
     */
    public function index(SyukuhakuRepository $syukuhakuRepository): Response
    {

        ;
        return $this->render('syukuhaku/index.html.twig', [
            'syukuhakus' => $syukuhakuRepository->findBy(
                array('type' => array('a','b')),
                array('check_in'=>'ASC')
            ),
        ]);
    }

    /**
     * @Route("/new", name="syukuhaku_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $syukuhaku = new Syukuhaku();

        $syukuhaku->setCheckIn(new \DateTime());
        $syukuhaku->setCheckOut(new \DateTime());

        $syukuhaku->setCreatedAt(new \DateTime());
        $syukuhaku->setUpdatedAt(new \DateTime());

        $form = $this->createForm(SyukuhakuType::class, $syukuhaku);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($syukuhaku);
            $entityManager->flush();

            return $this->redirectToRoute('syukuhaku_index');
        }

        return $this->render('syukuhaku/new.html.twig', [
            'syukuhaku' => $syukuhaku,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="syukuhaku_show", methods={"GET"})
     */
    public function show(Syukuhaku $syukuhaku): Response
    {
        return $this->render('syukuhaku/show.html.twig', [
            'syukuhaku' => $syukuhaku,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="syukuhaku_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Syukuhaku $syukuhaku): Response
    {
        $form = $this->createForm(SyukuhakuType::class, $syukuhaku);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('syukuhaku_index');
        }

        return $this->render('syukuhaku/edit.html.twig', [
            'syukuhaku' => $syukuhaku,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="syukuhaku_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Syukuhaku $syukuhaku): Response
    {
        if ($this->isCsrfTokenValid('delete'.$syukuhaku->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($syukuhaku);
            $entityManager->flush();
        }

        return $this->redirectToRoute('syukuhaku_index');
    }
}
