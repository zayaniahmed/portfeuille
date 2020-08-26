<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\portfeuille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Portfeuille controller.
 *
 * @Route("portfeuille")
 */
class portfeuilleController extends Controller
{
    /**
     * Lists all portfeuille entities.
     *
     * @Route("/", name="portfeuille_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $portfeuilles = $em->getRepository('PortfolioBundle:portfeuille')->findAll();

        return $this->render('portfeuille/index.html.twig', array(
            'portfeuilles' => $portfeuilles,
        ));
    }

    /**
     * Creates a new portfeuille entity.
     *
     * @Route("/new", name="portfeuille_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $portfeuille = new Portfeuille();
        $form = $this->createForm('PortfolioBundle\Form\portfeuilleType', $portfeuille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form ['photo']->getData();
            $newImageName=$file->getClientOriginalName();

            $file->move($this->getParameter('image_directory'),$newImageName);
            $portfeuille->setPhoto($newImageName);
            dump($file);
            dump($portfeuille);
            $em = $this->getDoctrine()->getManager();
            $em->persist($portfeuille);
            $em->flush();

            return $this->redirectToRoute('portfeuille_show', array('id' => $portfeuille->getId()));
        }

        return $this->render('portfeuille/new.html.twig', array(
            'portfeuille' => $portfeuille,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a portfeuille entity.
     *
     * @Route("/{id}", name="portfeuille_show")
     * @Method("GET")
     */
    public function showAction(portfeuille $portfeuille)
    {
        $deleteForm = $this->createDeleteForm($portfeuille);

        return $this->render('portfeuille/show.html.twig', array(
            'portfeuille' => $portfeuille,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing portfeuille entity.
     *
     * @Route("/{id}/edit", name="portfeuille_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, portfeuille $portfeuille)
    {
        $deleteForm = $this->createDeleteForm($portfeuille);
        $editForm = $this->createForm('PortfolioBundle\Form\portfeuilleType', $portfeuille);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('portfeuille_edit', array('id' => $portfeuille->getId()));
        }

        return $this->render('portfeuille/edit.html.twig', array(
            'portfeuille' => $portfeuille,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a portfeuille entity.
     *
     * @Route("/{id}", name="portfeuille_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, portfeuille $portfeuille)
    {
        $form = $this->createDeleteForm($portfeuille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($portfeuille);
            $em->flush();
        }

        return $this->redirectToRoute('portfeuille_index');
    }

    /**
     * Creates a form to delete a portfeuille entity.
     *
     * @param portfeuille $portfeuille The portfeuille entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(portfeuille $portfeuille)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('portfeuille_delete', array('id' => $portfeuille->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
