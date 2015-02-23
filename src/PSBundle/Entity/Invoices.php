<?php

namespace PSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PSBundle\Entity\InvoicesRepository")
 */
class Invoices
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
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_date", type="date")
     */
    private $invoiceDate;

    /**

     * @ORM\ManyToOne(targetEntity="Clients", inversedBy="clientelle")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $clientId;


    /**
     * @var string
     *
     * @ORM\Column(name="invoice_num", type="string", length=100)
     */
    private $invoiceNum;


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
     * Set invoiceDate
     *
     * @param \DateTime $invoiceDate
     * @return Invoices
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTime 
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     * @return Invoices
     */

    /**
     * Set invoiceNum
     *
     * @param string $invoiceNum
     * @return Invoices
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
     * Set clientId
     *
     * @param \PSBundle\Entity\Clients $clientId
     * @return Invoices
     */
    public function setClientId(\PSBundle\Entity\Clients $clientId = null)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return \PSBundle\Entity\Clients 
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}
