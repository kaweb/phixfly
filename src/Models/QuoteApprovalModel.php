<?php

namespace Kaweb\Phixfly\Models;

class QuoteApprovalModel
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
    public function __construct(string $approvalNameType, bool $approved, \DateTime $approvedDate, int $quoteAmount, \DateTime $requestedDate, string $quoteId, string $priceAgencyReceivableGross, string $priceAgencyReceivableNet, string $priceAgencyReceivableTax)
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
    public function getApprovalNameType(): string
    {
        return $this->approvalNameType;
    }

    /**
     * @param string $approvalNameType
     */
    public function setApprovalNameType(string $approvalNameType)
    {
        $this->approvalNameType = $approvalNameType;
    }

    /**
     * @return bool
     */
    public function isApproved(): bool
    {
        return $this->approved;
    }

    /**
     * @param bool $approved
     */
    public function setApproved(bool $approved)
    {
        $this->approved = $approved;
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate(): \DateTime
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
    public function getQuoteAmount(): int
    {
        return $this->quoteAmount;
    }

    /**
     * @param int $quoteAmount
     */
    public function setQuoteAmount(int $quoteAmount)
    {
        $this->quoteAmount = $quoteAmount;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate(): \DateTime
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
    public function getQuoteId(): string
    {
        return $this->quoteId;
    }

    /**
     * @param string $quoteId
     */
    public function setQuoteId(string $quoteId)
    {
        $this->quoteId = $quoteId;
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