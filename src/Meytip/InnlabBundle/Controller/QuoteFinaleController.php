<?php

namespace Meytip\InnlabBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Meytip\InnlabBundle\Entity\QuoteFinale;
use Meytip\InnlabBundle\Form\QuoteFinaleType;

/**
 * QuoteFinale controller.
 *
 */
class QuoteFinaleController extends Controller
{

    /**
     * Lists all QuoteFinale entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MeytipInnlabBundle:QuoteFinale')->findAll();

        return $this->render('MeytipInnlabBundle:QuoteFinale:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new QuoteFinale entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new QuoteFinale();
        $form = $this->createForm(new QuoteFinaleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('quotefinale_show', array('id' => $entity->getId())));
        }

        return $this->render('MeytipInnlabBundle:QuoteFinale:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new QuoteFinale entity.
     *
     */
    public function newAction()
    {
        $entity = new QuoteFinale();
        $form   = $this->createForm(new QuoteFinaleType(), $entity);

        return $this->render('MeytipInnlabBundle:QuoteFinale:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a QuoteFinale entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeytipInnlabBundle:QuoteFinale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuoteFinale entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MeytipInnlabBundle:QuoteFinale:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing QuoteFinale entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeytipInnlabBundle:QuoteFinale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuoteFinale entity.');
        }

        $editForm = $this->createForm(new QuoteFinaleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MeytipInnlabBundle:QuoteFinale:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing QuoteFinale entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeytipInnlabBundle:QuoteFinale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuoteFinale entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new QuoteFinaleType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('quotefinale_edit', array('id' => $id)));
        }

        return $this->render('MeytipInnlabBundle:QuoteFinale:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a QuoteFinale entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MeytipInnlabBundle:QuoteFinale')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find QuoteFinale entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('quotefinale'));
    }

    /**
     * Creates a form to delete a QuoteFinale entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
