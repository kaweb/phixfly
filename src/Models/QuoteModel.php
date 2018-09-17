<?php

namespace Kaweb\Phixfly\Models;

class QuoteModel
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
    public function __construct(string $id, string $status, ContractorModel $contractor, string $priceAgencyPayableGross, string $priceAgencyPayableNet, string $priceAgencyPayableTax, string $priceAgencyReceivableGross, string $priceAgencyReceivableNet, string $priceAgencyReceivableTax)
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return ContractorModel
     */
    public function getContractor(): ContractorModel
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
    public function getPriceAgencyPayableGross(): string
    {
        return $this->priceAgencyPayableGross;
    }

    /**
     * @param string $priceAgencyPayableGross
     */
    public function setPriceAgencyPayableGross(string $priceAgencyPayableGross)
    {
        $this->priceAgencyPayableGross = $priceAgencyPayableGross;
    }

    /**
     * @return string
     */
    public function getPriceAgencyPayableNet(): string
    {
        return $this->priceAgencyPayableNet;
    }

    /**
     * @param string $priceAgencyPayableNet
     */
    public function setPriceAgencyPayableNet(string $priceAgencyPayableNet)
    {
        $this->priceAgencyPayableNet = $priceAgencyPayableNet;
    }

    /**
     * @return string
     */
    public function getPriceAgencyPayableTax(): string
    {
        return $this->priceAgencyPayableTax;
    }

    /**
     * @param string $priceAgencyPayableTax
     */
    public function setPriceAgencyPayableTax(string $priceAgencyPayableTax)
    {
        $this->priceAgencyPayableTax = $priceAgencyPayableTax;
    }

    /**
     * @return string
     */
    public function getPriceAgencyReceivableGross(): string
    {
        return $this->priceAgencyReceivableGross;
    }

    /**
     * @param string $priceAgencyReceivableGross
     */
    public function setPriceAgencyReceivableGross(string $priceAgencyReceivableGross)
    {
        $this->priceAgencyReceivableGross = $priceAgencyReceivableGross;
    }

    /**
     * @return string
     */
    public function getPriceAgencyReceivableNet(): string
    {
        return $this->priceAgencyReceivableNet;
    }

    /**
     * @param string $priceAgencyReceivableNet
     */
    public function setPriceAgencyReceivableNet(string $priceAgencyReceivableNet)
    {
        $this->priceAgencyReceivableNet = $priceAgencyReceivableNet;
    }

    /**
     * @return string
     */
    public function getPriceAgencyReceivableTax(): string
    {
        return $this->priceAgencyReceivableTax;
    }

    /**
     * @param string $priceAgencyReceivableTax
     */
    public function setPriceAgencyReceivableTax(string $priceAgencyReceivableTax)
    {
        $this->priceAgencyReceivableTax = $priceAgencyReceivableTax;
    }
}