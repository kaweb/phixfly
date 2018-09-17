<?php

namespace Kaweb\Phixfly\Models;

class QuoteApprovalModel implements ModelInterface
{
    /**
     * @var string
     */
    protected $approvalNameType;
    
    /**
     * @var bool
     */
    protected $approved;
    
    /**
     * @var \DateTime
     */
    protected $approvedDate;
    
    /**
     * @var int
     */
    protected $quoteAmount;
    
    /**
     * @var \DateTime
     */
    protected $requestedDate;
    
    /**
     * @var string
     */
    protected $quoteId;
    
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
     * QuoteApprovalModel constructor.
     * http://api-docs.fixflo.com/#resources-quoteapproval
     *
     * @param string $approvalNameType
     * @param bool $approved
     * @param \DateTime $approvedDate
     * @param int $quoteAmount
     * @param \DateTime $requestedDate
     * @param string $quoteId
     * @param string $priceAgencyReceivableGross
     * @param string $priceAgencyReceivableNet
     * @param string $priceAgencyReceivableTax
     */
    public function __construct($approvalNameType, $approved, \DateTime $approvedDate, $quoteAmount, \DateTime $requestedDate, $quoteId, $priceAgencyReceivableGross, $priceAgencyReceivableNet, $priceAgencyReceivableTax)
    {
        $this->approvalNameType = $approvalNameType;
        $this->approved = $approved;
        $this->approvedDate = $approvedDate;
        $this->quoteAmount = $quoteAmount;
        $this->requestedDate = $requestedDate;
        $this->quoteId = $quoteId;
        $this->priceAgencyReceivableGross = $priceAgencyReceivableGross;
        $this->priceAgencyReceivableNet = $priceAgencyReceivableNet;
        $this->priceAgencyReceivableTax = $priceAgencyReceivableTax;
    }

    /**
     * @return string
     */
    public function getApprovalNameType()
    {
        return $this->approvalNameType;
    }

    /**
     * @param string $approvalNameType
     */
    public function setApprovalNameType($approvalNameType)
    {
        $this->approvalNameType = $approvalNameType;
    }

    /**
     * @return bool
     */
    public function isApproved()
    {
        return $this->approved;
    }

    /**
     * @param bool $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate()
    {
        return $this->approvedDate;
    }

    /**
     * @param \DateTime $approvedDate
     */
    public function setApprovedDate(\DateTime $approvedDate)
    {
        $this->approvedDate = $approvedDate;
    }

    /**
     * @return int
     */
    public function getQuoteAmount()
    {
        return $this->quoteAmount;
    }

    /**
     * @param int $quoteAmount
     */
    public function setQuoteAmount($quoteAmount)
    {
        $this->quoteAmount = $quoteAmount;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
        return $this->requestedDate;
    }

    /**
     * @param \DateTime $requestedDate
     */
    public function setRequestedDate(\DateTime $requestedDate)
    {
        $this->requestedDate = $requestedDate;
    }

    /**
     * @return string
     */
    public function getQuoteId()
    {
        return $this->quoteId;
    }

    /**
     * @param string $quoteId
     */
    public function setQuoteId($quoteId)
    {
        $this->quoteId = $quoteId;
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