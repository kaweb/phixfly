<?php

namespace Kaweb\FixfloClient\Models;

class JobModel
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $issueId;
    
    /**
     * @var string
     */
    protected $tenantNotes;
    
    /**
     * @var string
     */
    protected $jobberNotes;
    
    /**
     * @var \DateTime
     */
    protected $startDate;
    
    /**
     * @var string
     */
    protected $externalRefJob;
    
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
    protected $priceAgencyReceivableTax;
    
    /**
     * @var string
     */
    protected $jobInvoiceNumber;
    
    /**
     * @var string
     */
    protected $quotedPriceAgencyPayableGross;
    
    /**
     * @var string
     */
    protected $quotedPriceAgencyPayableNet;
    
    /**
     * @var string
     */
    protected $quotedPriceAgencyPayableTax;
    
    /**
     * @var string
     */
    protected $quotedPriceAgencyReceivableGross;
    
    /**
     * @var string
     */
    protected $quotedPriceAgencyReceivableNet;
    
    /**
     * @var string
     */
    protected $quotedPriceAgencyReceivableTax;

    /**
     * @var string
     */
    protected $appointmentDescription;
    
    /**
     * @var string
     */
    protected $appointmentRange;
    
    /**
     * @var \DateTime
     */
    protected $createdDate;
    
    /**
     * @var \DateTime
     */
    protected $jobCompleted;
    
    /**
     * @var string
     */
    protected $jobDuration;
    
    /**
     * @var bool
     */
    protected $tenantAcceptedStartDate;
    
    /**
     * @var bool
     */
    protected $jobberAgreedWithTenantStartDate;
    
    /**
     * @var QuoteApprovalModel
     */
    protected $landlordApproval;
    
    /**
     * @var QuoteApprovalModel
     */
    protected $insurerApproval;
    
    /**
     * @var ContractorModel
     */
    protected $contractor;

    /**
     * JobModel constructor.
     * http://api-docs.fixflo.com/#resources-job
     *
     * @param string $id
     * @param string $issueId
     * @param string $tenantNotes
     * @param string $jobberNotes
     * @param \DateTime $startDate
     * @param string $externalRefJob
     * @param string $priceAgencyPayableGross
     * @param string $priceAgencyPayableNet
     * @param string $priceAgencyPayableTax
     * @param string $priceAgencyReceivableTax
     * @param string $jobInvoiceNumber
     * @param string $quotedPriceAgencyPayableGross
     * @param string $quotedPriceAgencyPayableNet
     * @param string $quotedPriceAgencyPayableTax
     * @param string $quotedPriceAgencyReceivableGross
     * @param string $quotedPriceAgencyReceivableNet
     * @param string $quotedPriceAgencyReceivableTax
     * @param string $appointmentDescription
     * @param string $appointmentRange
     * @param \DateTime $createdDate
     * @param \DateTime $jobCompleted
     * @param string $jobDuration
     * @param bool $tenantAcceptedStartDate
     * @param bool $jobberAgreedWithTenantStartDate
     * @param QuoteApprovalModel $landlordApproval
     * @param QuoteApprovalModel $insurerApproval
     * @param ContractorModel $contractor
     */
    public function __construct(string $id, string $issueId, string $tenantNotes, string $jobberNotes, \DateTime $startDate, string $externalRefJob, string $priceAgencyPayableGross, string $priceAgencyPayableNet, string $priceAgencyPayableTax, string $priceAgencyReceivableTax, string $jobInvoiceNumber, string $quotedPriceAgencyPayableGross, string $quotedPriceAgencyPayableNet, string $quotedPriceAgencyPayableTax, string $quotedPriceAgencyReceivableGross, string $quotedPriceAgencyReceivableNet, string $quotedPriceAgencyReceivableTax, string $appointmentDescription, string $appointmentRange, \DateTime $createdDate, \DateTime $jobCompleted, string $jobDuration, bool $tenantAcceptedStartDate, bool $jobberAgreedWithTenantStartDate, QuoteApprovalModel $landlordApproval, QuoteApprovalModel $insurerApproval, ContractorModel $contractor)
    {
        $this->id = $id;
        $this->issueId = $issueId;
        $this->tenantNotes = $tenantNotes;
        $this->jobberNotes = $jobberNotes;
        $this->startDate = $startDate;
        $this->externalRefJob = $externalRefJob;
        $this->priceAgencyPayableGross = $priceAgencyPayableGross;
        $this->priceAgencyPayableNet = $priceAgencyPayableNet;
        $this->priceAgencyPayableTax = $priceAgencyPayableTax;
        $this->priceAgencyReceivableTax = $priceAgencyReceivableTax;
        $this->jobInvoiceNumber = $jobInvoiceNumber;
        $this->quotedPriceAgencyPayableGross = $quotedPriceAgencyPayableGross;
        $this->quotedPriceAgencyPayableNet = $quotedPriceAgencyPayableNet;
        $this->quotedPriceAgencyPayableTax = $quotedPriceAgencyPayableTax;
        $this->quotedPriceAgencyReceivableGross = $quotedPriceAgencyReceivableGross;
        $this->quotedPriceAgencyReceivableNet = $quotedPriceAgencyReceivableNet;
        $this->quotedPriceAgencyReceivableTax = $quotedPriceAgencyReceivableTax;
        $this->appointmentDescription = $appointmentDescription;
        $this->appointmentRange = $appointmentRange;
        $this->createdDate = $createdDate;
        $this->jobCompleted = $jobCompleted;
        $this->jobDuration = $jobDuration;
        $this->tenantAcceptedStartDate = $tenantAcceptedStartDate;
        $this->jobberAgreedWithTenantStartDate = $jobberAgreedWithTenantStartDate;
        $this->landlordApproval = $landlordApproval;
        $this->insurerApproval = $insurerApproval;
        $this->contractor = $contractor;
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
    public function getIssueId(): string
    {
        return $this->issueId;
    }

    /**
     * @param string $issueId
     */
    public function setIssueId(string $issueId)
    {
        $this->issueId = $issueId;
    }

    /**
     * @return string
     */
    public function getTenantNotes(): string
    {
        return $this->tenantNotes;
    }

    /**
     * @param string $tenantNotes
     */
    public function setTenantNotes(string $tenantNotes)
    {
        $this->tenantNotes = $tenantNotes;
    }

    /**
     * @return string
     */
    public function getJobberNotes(): string
    {
        return $this->jobberNotes;
    }

    /**
     * @param string $jobberNotes
     */
    public function setJobberNotes(string $jobberNotes)
    {
        $this->jobberNotes = $jobberNotes;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getExternalRefJob(): string
    {
        return $this->externalRefJob;
    }

    /**
     * @param string $externalRefJob
     */
    public function setExternalRefJob(string $externalRefJob)
    {
        $this->externalRefJob = $externalRefJob;
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

    /**
     * @return string
     */
    public function getJobInvoiceNumber(): string
    {
        return $this->jobInvoiceNumber;
    }

    /**
     * @param string $jobInvoiceNumber
     */
    public function setJobInvoiceNumber(string $jobInvoiceNumber)
    {
        $this->jobInvoiceNumber = $jobInvoiceNumber;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyPayableGross(): string
    {
        return $this->quotedPriceAgencyPayableGross;
    }

    /**
     * @param string $quotedPriceAgencyPayableGross
     */
    public function setQuotedPriceAgencyPayableGross(string $quotedPriceAgencyPayableGross)
    {
        $this->quotedPriceAgencyPayableGross = $quotedPriceAgencyPayableGross;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyPayableNet(): string
    {
        return $this->quotedPriceAgencyPayableNet;
    }

    /**
     * @param string $quotedPriceAgencyPayableNet
     */
    public function setQuotedPriceAgencyPayableNet(string $quotedPriceAgencyPayableNet)
    {
        $this->quotedPriceAgencyPayableNet = $quotedPriceAgencyPayableNet;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyPayableTax(): string
    {
        return $this->quotedPriceAgencyPayableTax;
    }

    /**
     * @param string $quotedPriceAgencyPayableTax
     */
    public function setQuotedPriceAgencyPayableTax(string $quotedPriceAgencyPayableTax)
    {
        $this->quotedPriceAgencyPayableTax = $quotedPriceAgencyPayableTax;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyReceivableGross(): string
    {
        return $this->quotedPriceAgencyReceivableGross;
    }

    /**
     * @param string $quotedPriceAgencyReceivableGross
     */
    public function setQuotedPriceAgencyReceivableGross(string $quotedPriceAgencyReceivableGross)
    {
        $this->quotedPriceAgencyReceivableGross = $quotedPriceAgencyReceivableGross;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyReceivableNet(): string
    {
        return $this->quotedPriceAgencyReceivableNet;
    }

    /**
     * @param string $quotedPriceAgencyReceivableNet
     */
    public function setQuotedPriceAgencyReceivableNet(string $quotedPriceAgencyReceivableNet)
    {
        $this->quotedPriceAgencyReceivableNet = $quotedPriceAgencyReceivableNet;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyReceivableTax(): string
    {
        return $this->quotedPriceAgencyReceivableTax;
    }

    /**
     * @param string $quotedPriceAgencyReceivableTax
     */
    public function setQuotedPriceAgencyReceivableTax(string $quotedPriceAgencyReceivableTax)
    {
        $this->quotedPriceAgencyReceivableTax = $quotedPriceAgencyReceivableTax;
    }

    /**
     * @return string
     */
    public function getAppointmentDescription(): string
    {
        return $this->appointmentDescription;
    }

    /**
     * @param string $appointmentDescription
     */
    public function setAppointmentDescription(string $appointmentDescription)
    {
        $this->appointmentDescription = $appointmentDescription;
    }

    /**
     * @return string
     */
    public function getAppointmentRange(): string
    {
        return $this->appointmentRange;
    }

    /**
     * @param string $appointmentRange
     */
    public function setAppointmentRange(string $appointmentRange)
    {
        $this->appointmentRange = $appointmentRange;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate(): \DateTime
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return \DateTime
     */
    public function getJobCompleted(): \DateTime
    {
        return $this->jobCompleted;
    }

    /**
     * @param \DateTime $jobCompleted
     */
    public function setJobCompleted(\DateTime $jobCompleted)
    {
        $this->jobCompleted = $jobCompleted;
    }

    /**
     * @return string
     */
    public function getJobDuration(): string
    {
        return $this->jobDuration;
    }

    /**
     * @param string $jobDuration
     */
    public function setJobDuration(string $jobDuration)
    {
        $this->jobDuration = $jobDuration;
    }

    /**
     * @return bool
     */
    public function isTenantAcceptedStartDate(): bool
    {
        return $this->tenantAcceptedStartDate;
    }

    /**
     * @param bool $tenantAcceptedStartDate
     */
    public function setTenantAcceptedStartDate(bool $tenantAcceptedStartDate)
    {
        $this->tenantAcceptedStartDate = $tenantAcceptedStartDate;
    }

    /**
     * @return bool
     */
    public function isJobberAgreedWithTenantStartDate(): bool
    {
        return $this->jobberAgreedWithTenantStartDate;
    }

    /**
     * @param bool $jobberAgreedWithTenantStartDate
     */
    public function setJobberAgreedWithTenantStartDate(bool $jobberAgreedWithTenantStartDate)
    {
        $this->jobberAgreedWithTenantStartDate = $jobberAgreedWithTenantStartDate;
    }

    /**
     * @return QuoteApprovalModel
     */
    public function getLandlordApproval(): QuoteApprovalModel
    {
        return $this->landlordApproval;
    }

    /**
     * @param QuoteApprovalModel $landlordApproval
     */
    public function setLandlordApproval(QuoteApprovalModel $landlordApproval)
    {
        $this->landlordApproval = $landlordApproval;
    }

    /**
     * @return QuoteApprovalModel
     */
    public function getInsurerApproval(): QuoteApprovalModel
    {
        return $this->insurerApproval;
    }

    /**
     * @param QuoteApprovalModel $insurerApproval
     */
    public function setInsurerApproval(QuoteApprovalModel $insurerApproval)
    {
        $this->insurerApproval = $insurerApproval;
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
}