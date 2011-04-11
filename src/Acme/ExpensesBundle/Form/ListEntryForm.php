<?php

namespace Acme\ExpensesBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\IntegerField;

class ListEntryForm extends Form
{
    public function configure()
    {
        $this->add(new TextField('name'));
        $this->add(new TextField('price'));
        $this->add(new TextField('amount'));
    }
}
