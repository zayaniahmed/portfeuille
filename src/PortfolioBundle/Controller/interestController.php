<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\interest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Interest controller.
 *
 * @Route("interest")
 */
class interestController extends Controller
{
    /**
     * Lists all interest entities.
     *
     * @Route("/", name="interest_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();

        $interests = $em->getRepository('PortfolioBundle:interest')->findAll();

        return $this->render('interest/index.html.twig', array(
            'interests' => $interests,
            'user' => $user,
        ));
    }

    /**
     * Creates a new interest entity.
     *
     * @Route("/new", name="interest_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $interest = new Interest();
        $form = $this->createForm('PortfolioBundle\Form\interestType', $interest);
        $form->handleRequest($request);
        $user=$this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($interest);
            $em->flush();

            return $this->redirectToRoute('interest_index', array('id' => $interest->getId()));
        }

        return $this->render('interest/new.html.twig', array(
            'interest' => $interest,
            'form' => $form->createView(),
            'user' => $user,
        ));
    }

   /* /**
     * Finds and displays a interest entity.
     *
     * @Route("/{id}", name="interest_show")
     * @Method("GET")
     */
   /* public function showAction(interest $interest)
    {
        $deleteForm = $this->createDeleteForm($interest);

        return $this->render('interest/show.html.twig', array(
            'interest' => $interest,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing interest entity.
     *
     * @Route("/{id}/edit", name="interest_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, interest $interest)
    {
        $deleteForm = $this->createDeleteForm($interest);
        $editForm = $this->createForm('PortfolioBundle\Form\interestType', $interest);
        $editForm->handleRequest($request);
        $user=$this->getUser();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('interest_edit', array('id' => $interest->getId()));
        }

        return $this->render('interest/edit.html.twig', array(
            'interest' => $interest,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $user,
        ));
    }

    /**
     * Deletes a interest entity.
     *
     * @Route("/{id}", name="interest_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $club=$em->getRepository(interest::class)->find($id);
        $em->remove($club);
        $em->flush();


        return $this->redirectToRoute('interest_index');
    }

    /**
     * Creates a form to delete a interest entity.
     *
     * @param interest $interest The interest entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(interest $interest)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('interest_delete', array('id' => $interest->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
