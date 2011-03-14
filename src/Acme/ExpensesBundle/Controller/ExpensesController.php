<?php

namespace Acme\ExpensesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\ExpensesBundle\Form\ListEntryForm;

class ExpensesController extends Controller
{
    /**
     * @extra:Route("/demo", name="_demo")
     * @extra:Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @extra:Route("/hello/{name}", name="_demo_hello")
     * @extra:Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @extra:Route("/entry", name="_entry")
     * @extra:Template()
     */
    public function entryAction()
    {
        $form = ListEntryForm::create($this->get('form.context'), 'entry');

        $form->bind($this->container->get('request'), $form);
        if ($form->isValid())
        {
            $this->get('session')->setFlash('notice', 'Entry saved!');

            return new RedirectResponse($this->generateUrl('_entry'));
        }

        return array('form' => $form);
    }
}
