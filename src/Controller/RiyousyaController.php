<?php

namespace App\Controller;

use App\Entity\Riyousya;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RiyousyaController extends AbstractController
{
    /**
     * @Route("/riyousya", name="riyousya", methods={"GET", "POST"})
     */
    public function index(Request $request)
    {
        $riyousya = new Riyousya();

//        $riyousya->setFamilyName("Talkabayashi");
//        $riyousya->setFirstName("Kazuki");
//        $riyousya->setBirthYear("1983");
//        $riyousya->setBirthMonth("12");
//        $riyousya->setBirthDay("10");
//        $riyousya->setTel("09012123456");
//        $riyousya->setAddress("");
//        $riyousya->setSns("dummy@sns");
//        $riyousya->setCreatedAt(new \DateTime());
//        $riyousya->setUpdatedAt(new \DateTime());

        $entityManager=$this->getDoctrine()->getManager();
//        $entityManager->persist($riyousya);
        $entityManager->flush();
        return $this->render(,[
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RiyousyaController.php',
        ]);
    }
}
