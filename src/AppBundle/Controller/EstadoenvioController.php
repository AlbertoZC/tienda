<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Estadoenvio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estadoenvio controller.
 *
 * @Route("estadoenvio")
 */
class EstadoenvioController extends Controller
{
    /**
     * Lists all estadoenvio entities.
     *
     * @Route("/", name="estadoenvio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoenvios = $em->getRepository('AppBundle:Estadoenvio')->findAll();

        return $this->render('estadoenvio/index.html.twig', array(
            'estadoenvios' => $estadoenvios,
        ));
    }

    /**
     * Creates a new estadoenvio entity.
     *
     * @Route("/new", name="estadoenvio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadoenvio = new Estadoenvio();
        $form = $this->createForm('AppBundle\Form\EstadoenvioType', $estadoenvio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoenvio);
            $em->flush();

            return $this->redirectToRoute('estadoenvio_show', array('estado' => $estadoenvio->getEstado()));
        }

        return $this->render('estadoenvio/new.html.twig', array(
            'estadoenvio' => $estadoenvio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadoenvio entity.
     *
     * @Route("/{estado}", name="estadoenvio_show")
     * @Method("GET")
     */
    public function showAction(Estadoenvio $estadoenvio)
    {
        $deleteForm = $this->createDeleteForm($estadoenvio);

        return $this->render('estadoenvio/show.html.twig', array(
            'estadoenvio' => $estadoenvio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadoenvio entity.
     *
     * @Route("/{estado}/edit", name="estadoenvio_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Estadoenvio $estadoenvio)
    {
        $deleteForm = $this->createDeleteForm($estadoenvio);
        $editForm = $this->createForm('AppBundle\Form\EstadoenvioType', $estadoenvio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estadoenvio_edit', array('estado' => $estadoenvio->getEstado()));
        }

        return $this->render('estadoenvio/edit.html.twig', array(
            'estadoenvio' => $estadoenvio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadoenvio entity.
     *
     * @Route("/{estado}", name="estadoenvio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Estadoenvio $estadoenvio)
    {
        $form = $this->createDeleteForm($estadoenvio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoenvio);
            $em->flush();
        }

        return $this->redirectToRoute('estadoenvio_index');
    }

    /**
     * Creates a form to delete a estadoenvio entity.
     *
     * @param Estadoenvio $estadoenvio The estadoenvio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Estadoenvio $estadoenvio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadoenvio_delete', array('estado' => $estadoenvio->getEstado())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
