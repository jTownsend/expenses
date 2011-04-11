<?php

namespace Acme\ExpensesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\ExpensesBundle\Form\ListEntryForm;
use Acme\ExpensesBundle\Document\Item;
use Acme\ExpensesBundle\Document\Entry;
use Acme\ExpensesBundle\Entry\EntryRequest;

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
        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        
        $entryRequest   = new EntryRequest();
        $form           = ListEntryForm::create($this->get('form.context'), 'entry');

        $form->bind($this->container->get('request'), $entryRequest);
        
        if ($form->isValid())
        {
            $entry = new Entry();
            $entry->setItem($entryRequest->getName());
            $entry->setPrice($entryRequest->getPrice());
            $entry->setAmount($entryRequest->getAmount());
            $dm->persist($entry);
            $dm->flush();
            
            return new RedirectResponse($this->generateUrl('_entry'));
        }
        else
        {
            'Not working';
        }

        return array('form' => $form);
    }
}
