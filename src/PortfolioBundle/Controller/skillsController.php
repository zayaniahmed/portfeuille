<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\skills;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Skill controller.
 *
 * @Route("skills")
 */
class skillsController extends Controller
{
    /**
     * Lists all skill entities.
     *
     * @Route("/", name="skills_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();

        $skills = $em->getRepository('PortfolioBundle:skills')->findAll();

        return $this->render('skills/index.html.twig', array(
            'skills' => $skills,
            'user' => $user,
        ));
    }

    /**
     * Creates a new skill entity.
     *
     * @Route("/new", name="skills_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $skill = new skills();
        $form = $this->createForm('PortfolioBundle\Form\skillsType', $skill);
        $form->handleRequest($request);
        $user=$this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($skill);
            $em->flush();


            return $this->redirectToRoute('skills_index', array('id' => $skill->getId()));
        }

        return $this->render('skills/new.html.twig', array(
            'skill' => $skill,
            'form' => $form->createView(),
            'user' => $user,
        ));
    }



    /**
     * Displays a form to edit an existing skill entity.
     *
     * @Route("/{id}/edit", name="skills_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, skills $skill)
    {
        $deleteForm = $this->createDeleteForm($skill);
        $editForm = $this->createForm('PortfolioBundle\Form\skillsType', $skill);
        $editForm->handleRequest($request);
        $user=$this->getUser();
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('skills_edit', array('id' => $skill->getId()));
        }

        return $this->render('skills/edit.html.twig', array(
            'skill' => $skill,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $user,
        ));
    }

    /**
     * Deletes a skill entity.
     *
     * @Route("/{id}", name="skills_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $club=$em->getRepository(skills::class)->find($id);
        $em->remove($club);
        $em->flush();

        return $this->redirectToRoute('skills_index');
    }

    /**
     * Creates a form to delete a skill entity.
     *
     * @param skills $skill The skill entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(skills $skill)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('skills_delete', array('id' => $skill->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
