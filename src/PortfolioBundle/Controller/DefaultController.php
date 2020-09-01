<?php

namespace PortfolioBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $portfeuille = $em->getRepository('PortfolioBundle:portfeuille')->findAll();
        $educations = $em->getRepository('PortfolioBundle:education')->findAll();
        $contacts = $em->getRepository('PortfolioBundle:contact')->findAll();
        $interests = $em->getRepository('PortfolioBundle:interest')->findAll();
        $skills = $em->getRepository('PortfolioBundle:skills')->findAll();
        $workexperiences = $em->getRepository('PortfolioBundle:workexperience')->findAll();
        $user=$this->getUser();
        return $this->render('base.html.twig', array(
            'user' => $user,
            'educations' =>$educations,
            'contacts'=>$contacts,
            'skills' => $skills,
            'workexperiences' => $workexperiences,
            'interests' => $interests,

            'portfeuille'=>$portfeuille));
    }
}
