<?php

namespace PSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceLineItems
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PSBundle\Entity\InvoiceLineItemsRepository")
 */
class InvoiceLineItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_num", type="string", length=100)
     */
    private $invoiceNum;

    /**
     * @var string
     *
     * @ORM\Column(name="product_id", type="string", length=100)
     */
    private $productId;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float")
     */
    private $qty;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invoiceNum
     *
     * @param string $invoiceNum
     * @return InvoiceLineItems
     */
    public function setInvoiceNum($invoiceNum)
    {
        $this->invoiceNum = $invoiceNum;

        return $this;
    }

    /**
     * Get invoiceNum
     *
     * @return string 
     */
    public function getInvoiceNum()
    {
        return $this->invoiceNum;
    }

    /**
     * Set productId
     *
     * @param string $productId
     * @return InvoiceLineItems
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set qty
     *
     * @param float $qty
     * @return InvoiceLineItems
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return float 
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return InvoiceLineItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
