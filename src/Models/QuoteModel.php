<?php

namespace Kaweb\Phixfly\Models;

class QuoteModel implements ModelInterface
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $status;
    
    /**
     * @var ContractorModel
     */
    protected $contractor;
    
    /**
     * @var string
     */
    protected $priceAgencyPayableGross;
    
    /**
     * @var string
     */
    protected $priceAgencyPayableNet;
    
    /**
     * @var string
     */
    protected $priceAgencyPayableTax;
    
    /**
     * @var string
     */
    protected $priceAgencyReceivableGross;
    
    /**
     * @var string
     */
    protected $priceAgencyReceivableNet;
    
    /**
     * @var string
     */
    protected $priceAgencyReceivableTax;

    /**
     * QuoteModel constructor.
     * http://api-docs.fixflo.com/#resources-quote
     *
     * @param string $id
     * @param string $status
     * @param ContractorModel $contractor
     * @param string $priceAgencyPayableGross
     * @param string $priceAgencyPayableNet
     * @param string $priceAgencyPayableTax
     * @param string $priceAgencyReceivableGross
     * @param string $priceAgencyReceivableNet
     * @param string $priceAgencyReceivableTax
     */
    public function __construct($id, $status, ContractorModel $contractor, $priceAgencyPayableGross, $priceAgencyPayableNet, $priceAgencyPayableTax, $priceAgencyReceivableGross, $priceAgencyReceivableNet, $priceAgencyReceivableTax)
    {
        $this->id = $id;
        $this->status = $status;
        $this->contractor = $contractor;
        $this->priceAgencyPayableGross = $priceAgencyPayableGross;
        $this->priceAgencyPayableNet = $priceAgencyPayableNet;
        $this->priceAgencyPayableTax = $priceAgencyPayableTax;
        $this->priceAgencyReceivableGross = $priceAgencyReceivableGross;
        $this->priceAgencyReceivableNet = $priceAgencyReceivableNet;
        $this->priceAgencyReceivableTax = $priceAgencyReceivableTax;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return ContractorModel
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * @param ContractorModel $contractor
     */
    public function setContractor(ContractorModel $contractor)
    {
        $this->contractor = $contractor;
    }

    /**
     * @return string
     */
    public function getPriceAgencyPayableGross()
    {
        return $this->priceAgencyPayableGross;
    }

    /**
     * @param string $priceAgencyPayableGross
     */
    public function setPriceAgencyPayableGross($priceAgencyPayableGross)
    {
        $this->priceAgencyPayableGross = $priceAgencyPayableGross;
    }

    /**
     * @return string
     */
    public function getPriceAgencyPayableNet()
    {
        return $this->priceAgencyPayableNet;
    }

    /**
     * @param string $priceAgencyPayableNet
     */
    public function setPriceAgencyPayableNet($priceAgencyPayableNet)
    {
        $this->priceAgencyPayableNet = $priceAgencyPayableNet;
    }

    /**
     * @return string
     */
    public function getPriceAgencyPayableTax()
    {
        return $this->priceAgencyPayableTax;
    }

    /**
     * @param string $priceAgencyPayableTax
     */
    public function setPriceAgencyPayableTax($priceAgencyPayableTax)
    {
        $this->priceAgencyPayableTax = $priceAgencyPayableTax;
    }

    /**
     * @return string
     */
    public function getPriceAgencyReceivableGross()
    {
        return $this->priceAgencyReceivableGross;
    }

    /**
     * @param string $priceAgencyReceivableGross
     */
    public function setPriceAgencyReceivableGross($priceAgencyReceivableGross)
    {
        $this->priceAgencyReceivableGross = $priceAgencyReceivableGross;
    }

    /**
     * @return string
     */
    public function getPriceAgencyReceivableNet()
    {
        return $this->priceAgencyReceivableNet;
    }

    /**
     * @param string $priceAgencyReceivableNet
     */
    public function setPriceAgencyReceivableNet($priceAgencyReceivableNet)
    {
        $this->priceAgencyReceivableNet = $priceAgencyReceivableNet;
    }

    /**
     * @return string
     */
    public function getPriceAgencyReceivableTax()
    {
        return $this->priceAgencyReceivableTax;
    }

    /**
     * @param string $priceAgencyReceivableTax
     */
    public function setPriceAgencyReceivableTax($priceAgencyReceivableTax)
    {
        $this->priceAgencyReceivableTax = $priceAgencyReceivableTax;
    }

    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        // TODO: Implement toArray() method.
    }
}