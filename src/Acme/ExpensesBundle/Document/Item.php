<?php
namespace Acme\ExpensesBundle\Document;

/**
 *  @mongodb:Document(collection="items")
 */
class Item
{
    /**
     * @mongodb:Id
     */
    private $id;

    /**
     * @mongodb:Field(type="string")
     */
    private $name;

    /**
     * @mongodb:Field(type="float")
     */
    private $price;
}