<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\workexperience;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Workexperience controller.
 *
 * @Route("workexperience")
 */
class workexperienceController extends Controller
{
    /**
     * Lists all workexperience entities.
     *
     * @Route("/", name="workexperience_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();

        $workexperiences = $em->getRepository('PortfolioBundle:workexperience')->findAll();

        return $this->render('workexperience/index.html.twig', array(
            'workexperiences' => $workexperiences,
            'user' => $user,
        ));
    }

    /**
     * Creates a new workexperience entity.
     *
     * @Route("/new", name="workexperience_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $workexperience = new Workexperience();
        $form = $this->createForm('PortfolioBundle\Form\workexperienceType', $workexperience);
        $form->handleRequest($request);
        $user=$this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workexperience);
            $em->flush();

            return $this->redirectToRoute('workexperience_index', array('id' => $workexperience->getId()));
        }

        return $this->render('workexperience/new.html.twig', array(
            'workexperience' => $workexperience,
            'form' => $form->createView(),
            'user' => $user,
        ));
    }

    /**
     * Finds and displays a workexperience entity.
     *
     * @Route("/{id}", name="workexperience_show")
     * @Method("GET")
     */
    public function showAction(workexperience $workexperience)
    {
        $deleteForm = $this->createDeleteForm($workexperience);

        return $this->render('workexperience/show.html.twig', array(
            'workexperience' => $workexperience,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing workexperience entity.
     *
     * @Route("/{id}/edit", name="workexperience_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, workexperience $workexperience)
    {
        $deleteForm = $this->createDeleteForm($workexperience);
        $editForm = $this->createForm('PortfolioBundle\Form\workexperienceType', $workexperience);
        $editForm->handleRequest($request);
        $user=$this->getUser();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('workexperience_edit', array('id' => $workexperience->getId()));
        }

        return $this->render('workexperience/edit.html.twig', array(
            'workexperience' => $workexperience,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $user,
        ));
    }

    /**
     * Deletes a workexperience entity.
     *
     * @Route("/{id}", name="workexperience_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $club=$em->getRepository(workexperience::class)->find($id);
        $em->remove($club);
        $em->flush();

        return $this->redirectToRoute('workexperience_index');
    }

    /**
     * Creates a form to delete a workexperience entity.
     *
     * @param workexperience $workexperience The workexperience entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(workexperience $workexperience)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workexperience_delete', array('id' => $workexperience->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
