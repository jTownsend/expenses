<?php
namespace Acme\ExpensesBundle\Entry;

class EntryRequest
{
    /**
     * @validation:MaxLength(100)
     * @validation:NotBlank
     */
    private $name;

    /**
     * @validation:NotBlank
     */
    private $price;

    /**
     * @validation:NotBlank
     */
    private $amount;

    /**
     * Set the name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the item submitted
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Get the price of the item submitted
     *
     * @return float
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
     * Get the amount of the item submitted
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
}