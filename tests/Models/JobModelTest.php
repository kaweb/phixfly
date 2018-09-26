<?php

namespace Kaweb\Phixfly\Models;

class JobModelTest extends \PHPUnit\Framework\TestCase
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
    public function __construct($id, $issueId, $tenantNotes, $jobberNotes, \DateTime $startDate, $externalRefJob, $priceAgencyPayableGross, $priceAgencyPayableNet, $priceAgencyPayableTax, $priceAgencyReceivableTax, $jobInvoiceNumber, $quotedPriceAgencyPayableGross, $quotedPriceAgencyPayableNet, $quotedPriceAgencyPayableTax, $quotedPriceAgencyReceivableGross, $quotedPriceAgencyReceivableNet, $quotedPriceAgencyReceivableTax, $appointmentDescription, $appointmentRange, \DateTime $createdDate, \DateTime $jobCompleted, $jobDuration, $tenantAcceptedStartDate, $jobberAgreedWithTenantStartDate, QuoteApprovalModel $landlordApproval, QuoteApprovalModel $insurerApproval, ContractorModel $contractor)
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
    public function getIssueId()
    {
        return $this->issueId;
    }

    /**
     * @param string $issueId
     */
    public function setIssueId($issueId)
    {
        $this->issueId = $issueId;
    }

    /**
     * @return string
     */
    public function getTenantNotes()
    {
        return $this->tenantNotes;
    }

    /**
     * @param string $tenantNotes
     */
    public function setTenantNotes($tenantNotes)
    {
        $this->tenantNotes = $tenantNotes;
    }

    /**
     * @return string
     */
    public function getJobberNotes()
    {
        return $this->jobberNotes;
    }

    /**
     * @param string $jobberNotes
     */
    public function setJobberNotes($jobberNotes)
    {
        $this->jobberNotes = $jobberNotes;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
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
    public function getExternalRefJob()
    {
        return $this->externalRefJob;
    }

    /**
     * @param string $externalRefJob
     */
    public function setExternalRefJob($externalRefJob)
    {
        $this->externalRefJob = $externalRefJob;
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
     * @return string
     */
    public function getJobInvoiceNumber()
    {
        return $this->jobInvoiceNumber;
    }

    /**
     * @param string $jobInvoiceNumber
     */
    public function setJobInvoiceNumber($jobInvoiceNumber)
    {
        $this->jobInvoiceNumber = $jobInvoiceNumber;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyPayableGross()
    {
        return $this->quotedPriceAgencyPayableGross;
    }

    /**
     * @param string $quotedPriceAgencyPayableGross
     */
    public function setQuotedPriceAgencyPayableGross($quotedPriceAgencyPayableGross)
    {
        $this->quotedPriceAgencyPayableGross = $quotedPriceAgencyPayableGross;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyPayableNet()
    {
        return $this->quotedPriceAgencyPayableNet;
    }

    /**
     * @param string $quotedPriceAgencyPayableNet
     */
    public function setQuotedPriceAgencyPayableNet($quotedPriceAgencyPayableNet)
    {
        $this->quotedPriceAgencyPayableNet = $quotedPriceAgencyPayableNet;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyPayableTax()
    {
        return $this->quotedPriceAgencyPayableTax;
    }

    /**
     * @param string $quotedPriceAgencyPayableTax
     */
    public function setQuotedPriceAgencyPayableTax($quotedPriceAgencyPayableTax)
    {
        $this->quotedPriceAgencyPayableTax = $quotedPriceAgencyPayableTax;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyReceivableGross()
    {
        return $this->quotedPriceAgencyReceivableGross;
    }

    /**
     * @param string $quotedPriceAgencyReceivableGross
     */
    public function setQuotedPriceAgencyReceivableGross($quotedPriceAgencyReceivableGross)
    {
        $this->quotedPriceAgencyReceivableGross = $quotedPriceAgencyReceivableGross;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyReceivableNet()
    {
        return $this->quotedPriceAgencyReceivableNet;
    }

    /**
     * @param string $quotedPriceAgencyReceivableNet
     */
    public function setQuotedPriceAgencyReceivableNet($quotedPriceAgencyReceivableNet)
    {
        $this->quotedPriceAgencyReceivableNet = $quotedPriceAgencyReceivableNet;
    }

    /**
     * @return string
     */
    public function getQuotedPriceAgencyReceivableTax()
    {
        return $this->quotedPriceAgencyReceivableTax;
    }

    /**
     * @param string $quotedPriceAgencyReceivableTax
     */
    public function setQuotedPriceAgencyReceivableTax($quotedPriceAgencyReceivableTax)
    {
        $this->quotedPriceAgencyReceivableTax = $quotedPriceAgencyReceivableTax;
    }

    /**
     * @return string
     */
    public function getAppointmentDescription()
    {
        return $this->appointmentDescription;
    }

    /**
     * @param string $appointmentDescription
     */
    public function setAppointmentDescription($appointmentDescription)
    {
        $this->appointmentDescription = $appointmentDescription;
    }

    /**
     * @return string
     */
    public function getAppointmentRange()
    {
        return $this->appointmentRange;
    }

    /**
     * @param string $appointmentRange
     */
    public function setAppointmentRange($appointmentRange)
    {
        $this->appointmentRange = $appointmentRange;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
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
    public function getJobCompleted()
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
    public function getJobDuration()
    {
        return $this->jobDuration;
    }

    /**
     * @param string $jobDuration
     */
    public function setJobDuration($jobDuration)
    {
        $this->jobDuration = $jobDuration;
    }

    /**
     * @return bool
     */
    public function isTenantAcceptedStartDate()
    {
        return $this->tenantAcceptedStartDate;
    }

    /**
     * @param bool $tenantAcceptedStartDate
     */
    public function setTenantAcceptedStartDate($tenantAcceptedStartDate)
    {
        $this->tenantAcceptedStartDate = $tenantAcceptedStartDate;
    }

    /**
     * @return bool
     */
    public function isJobberAgreedWithTenantStartDate()
    {
        return $this->jobberAgreedWithTenantStartDate;
    }

    /**
     * @param bool $jobberAgreedWithTenantStartDate
     */
    public function setJobberAgreedWithTenantStartDate($jobberAgreedWithTenantStartDate)
    {
        $this->jobberAgreedWithTenantStartDate = $jobberAgreedWithTenantStartDate;
    }

    /**
     * @return QuoteApprovalModel
     */
    public function getLandlordApproval()
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
    public function getInsurerApproval()
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
}