<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Motivobloqueo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Motivobloqueo controller.
 *
 * @Route("motivobloqueo")
 */
class MotivobloqueoController extends Controller
{
    /**
     * Lists all motivobloqueo entities.
     *
     * @Route("/", name="motivobloqueo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $motivobloqueos = $em->getRepository('AppBundle:Motivobloqueo')->findAll();

        return $this->render('motivobloqueo/index.html.twig', array(
            'motivobloqueos' => $motivobloqueos,
        ));
    }

    /**
     * Creates a new motivobloqueo entity.
     *
     * @Route("/new", name="motivobloqueo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $motivobloqueo = new Motivobloqueo();
        $form = $this->createForm('AppBundle\Form\MotivobloqueoType', $motivobloqueo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($motivobloqueo);
            $em->flush();

            return $this->redirectToRoute('motivobloqueo_show', array('id' => $motivobloqueo->getId()));
        }

        return $this->render('motivobloqueo/new.html.twig', array(
            'motivobloqueo' => $motivobloqueo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a motivobloqueo entity.
     *
     * @Route("/{id}", name="motivobloqueo_show")
     * @Method("GET")
     */
    public function showAction(Motivobloqueo $motivobloqueo)
    {
        $deleteForm = $this->createDeleteForm($motivobloqueo);

        return $this->render('motivobloqueo/show.html.twig', array(
            'motivobloqueo' => $motivobloqueo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing motivobloqueo entity.
     *
     * @Route("/{id}/edit", name="motivobloqueo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Motivobloqueo $motivobloqueo)
    {
        $deleteForm = $this->createDeleteForm($motivobloqueo);
        $editForm = $this->createForm('AppBundle\Form\MotivobloqueoType', $motivobloqueo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('motivobloqueo_edit', array('id' => $motivobloqueo->getId()));
        }

        return $this->render('motivobloqueo/edit.html.twig', array(
            'motivobloqueo' => $motivobloqueo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a motivobloqueo entity.
     *
     * @Route("/{id}", name="motivobloqueo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Motivobloqueo $motivobloqueo)
    {
        $form = $this->createDeleteForm($motivobloqueo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($motivobloqueo);
            $em->flush();
        }

        return $this->redirectToRoute('motivobloqueo_index');
    }

    /**
     * Creates a form to delete a motivobloqueo entity.
     *
     * @param Motivobloqueo $motivobloqueo The motivobloqueo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Motivobloqueo $motivobloqueo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('motivobloqueo_delete', array('id' => $motivobloqueo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
