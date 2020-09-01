<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\education;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Education controller.
 *
 * @Route("education")
 */
class educationController extends Controller
{
    /**
     * Lists all education entities.
     *
     * @Route("/", name="education_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $educations = $em->getRepository('PortfolioBundle:education')->findAll();

        return $this->render('education/index.html.twig', array(
            'educations' => $educations,
            'user' => $user,
        ));
    }

    /**
     * Creates a new education entity.
     *
     * @Route("/new", name="education_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $education = new Education();
        $form = $this->createForm('PortfolioBundle\Form\educationType', $education);
        $form->handleRequest($request);
        $user=$this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($education);
            $em->flush();

            return $this->redirectToRoute('education_index');
        }

        return $this->render('education/new.html.twig', array(
            'education' => $education,
            'form' => $form->createView(),
            'user' => $user,
        ));
    }

   /* /**
     * Finds and displays a education entity.
     *
     * @Route("/{id}", name="education_show")
     * @Method("GET")
     */
  /*  public function showAction(education $education)
    {
        $deleteForm = $this->createDeleteForm($education);

        return $this->render('education/show.html.twig', array(
            'education' => $education,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing education entity.
     *
     * @Route("/{id}/edit", name="education_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, education $education)
    {
        $deleteForm = $this->createDeleteForm($education);
        $editForm = $this->createForm('PortfolioBundle\Form\educationType', $education);
        $editForm->handleRequest($request);
        $user=$this->getUser();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('education_edit', array('id' => $education->getId()));
        }

        return $this->render('education/edit.html.twig', array(
            'education' => $education,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $user,
        ));
    }

    /**
     * Deletes a education entity.
     *
     * @Route("/{id}", name="education_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $club=$em->getRepository(education::class)->find($id);
        $em->remove($club);
        $em->flush();

        return $this->redirectToRoute('education_index');
    }

    /**
     * Creates a form to delete a education entity.
     *
     * @param education $education The education entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(education $education)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('education_delete', array('id' => $education->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
