<?php

namespace App\Controller;

use App\Entity\YadoStaff;
use App\Form\YadoStaffType;
use App\Repository\YadoStaffRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/yado/staff", methods={"GET","POST"})
 */
class YadoStaffController extends AbstractController
{
    /**
     * @Route("/", name="yado_staff",methods={"GET","POST"})
     */
    public function index(Request $request ,YadoStaffRepository $yadoStaffRepository)
    {
        $yadostaff = new YadoStaff();

        $form = $this->createForm(YadoStaffType::class, $yadostaff);
        $form->handleRequest($request);

        $staff_name = ($form->get('firstNmae')->getData());

        if($form->isSubmitted()  && $form->isValid()){

        return $this->render('yado_staff/result.html.twig'
            , [
            'controller_name' => 'YadoStaffController',
            'yadostaffs' => $yadoStaffRepository->findBy([
                'firstNmae' => $staff_name
            ]),
            'form' => $form->createView()
        ])
            ;
        }
        return $this->render('yado_staff/index.html.twig', [
            'controller_name' => 'YadoStaffController',
            'yadostaffs' => $yadoStaffRepository->findAll(),
            'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route("/result", name="yado_staff_result",methods={"GET","POST"})
     */
    public function serch_result(Request $request ,YadoStaffRepository $yadoStaffRepository)
    {

        $yadostaff = new YadoStaff();

        $form = $this->createForm(YadoStaffType::class, $yadostaff);
        $form->handleRequest($request);

        $staff_name=($form->get('firstNmae')->getData());


        return $this->render('yado_staff/result.html.twig', [
            'controller_name' => 'YadoStaffController',
//                        'yadostaffs' => $yadoStaffRepository->findAll(),
            'yadostaffs' => $yadoStaffRepository->findBy([
                'firstNmae'=> $staff_name
            ]),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{staff_name}", name="yado_staff_name_data")
     */
    public function person_name_data(YadoStaffRepository $yadoStaffRepository, $staff_name)
    {

        return $this->render('yado_staff/index.html.twig', [
            'controller_name' => 'YadoStaffController',
            'yadostaffs' => $yadoStaffRepository->findBy([
                'firstNmae'=>$staff_name
            ]),

        ]);
    }
    /**
     * @Route("/{staff_name}/{id}", name="yado_staff_data", requirements={"id"="\d+"})
     */
    public function person_data(YadoStaffRepository $yadoStaffRepository, $staff_name, $id)
    {

        return $this->render('yado_staff/index.html.twig', [
            'controller_name' => 'YadoStaffController',
            'yadostaffs' => $yadoStaffRepository->findBy([
                'id' =>$id,
            ]),

        ]);
    }
    /**
     * @Route("/new", name="yado_staff_new", methods={"GET","POST"})
     */
    public function newstaff(Request $request)
    {

        $yadostaff = new YadoStaff();
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)

        $yadostaff->setNyuusyaAt(new \DateTime());
        $yadostaff->setTaisyaAt(new \DateTime());
        $yadostaff->setCreatedAt(new \DateTime());
        $yadostaff->setUpdatedAt(new \DateTime());

        $form = $this->createForm(YadoStaffType::class, $yadostaff);
        $form->handleRequest($request);

        if($form->isSubmitted()  && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($yadostaff);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            return $this->redirectToRoute('yado_staff');
        }


        return $this->render('yado_staff/new.html.twig', [
            'controller_name' => 'YadoStaffNewController',
            'form' => $form->createView()

        ]);
    }
}
