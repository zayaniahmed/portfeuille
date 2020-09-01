<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityControllerController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('PortfolioBundle:SecurityController:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/home")
     */
    public function redirectAction()
    {$authChecker = $this->container->get('security.authorization_checker');
        if($authChecker->isGranted('ROLE_ADMIN')){
            $user=$this->getUser();
        //return $this->redirectToRoute('portfeuille_index');
        return $this->render('tamplate.html.twig', array(
                'user' => $user));}
        else{
        return $this->render('user.html.twig', array(
            // ...
        ));
    }}

}
