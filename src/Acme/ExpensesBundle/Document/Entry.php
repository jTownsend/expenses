<?php
namespace Acme\ExpensesBundle\Document;

/**
 *  @mongodb:Document(collection="entries")
 */
class Entry
{
    /**
     * @mongodb:Id
     */
    private $id;

    /**
     * @mongodb:ReferenceOne(targetDocument="Acme\ExpensesBundle\Document\Item")
     */
    private $itemTest;

    /**
     * @mongodb:Field(type="string")
     */
    private $item;

    /**
     * @mongodb:Field(type="float")
     */
    private $price;

    /**
     * @mongodb:Field(type="int")
     */
    private $amount;

    /**
     * Set the item
     *
     * @param string $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * Get the item submitted
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set the price
     *
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get the price submitted
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the amount
     *
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get the amount submitted
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
}