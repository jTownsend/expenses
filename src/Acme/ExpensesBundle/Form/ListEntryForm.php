<?php

namespace Acme\ExpensesBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\IntegerField;

class ListEntryForm extends Form
{
    /**
     * @validation:NotBlank
     */
    public $itemName;

    /**
     * @validation:NotBlank
     * @validation:AssertType("float")
     */
    public $itemCost;

    /**
     * @validation:NotBlank
     * @validation:AssertType("int")
     */
    public $itemQuantity;

    public function configure()
    {
        $this->add(new TextField('itemName'));
        $this->add(new TextField('itemCost'));
        $this->add(new TextField('itemQuantity'));
    }
}
