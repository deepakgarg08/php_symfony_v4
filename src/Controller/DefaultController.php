<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        //TO execute create query and storing data in database
        // $entityManager = $this->getDoctrine()->getManager();     

        // $user1 = new User;
        // $user1->setName('Deepak');

        // $user2 = new User;
        // $user2->setName('Vikas');

        // $user3 = new User;
        // $user3->setName('Aamir');

        // $user4 = new User;
        // $user4->setName('Shantanu');
        
        // $entityManager->persist($user1);
        // $entityManager->persist($user2);
        // $entityManager->persist($user3);
        // $entityManager->persist($user4);
        // exit($entityManager->flush());

        //to read all data from database
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        // print $users[0]['name'];
        // $users = [{'name' : 'Adam'}];
    //    $users = [];

        // return new Response('<b>Hello Deepak</b>');

         return $this->render('default/index.html.twig', [
             'controller_name' =>'DefaultController',
            'users' => $users,
        ]);


    }
}
