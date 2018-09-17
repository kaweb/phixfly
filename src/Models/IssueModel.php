<?php

namespace Kaweb\Phixfly\Models;

class IssueModel
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $tenantId;
    
    /**
     * @var string
     */
    protected $externalRefTenancyAgreement;
    
    /**
     * @var string
     */
    protected $title;
    
    /**
     * @var string
     */
    protected $faultTitle;
    
    /**
     * @var string
     */
    protected $faultCategory;
    
    /**
     * @var AdditionalDetailModel[]
     */
    protected $additionalDetails;
    
    /**
     * @var string
     */
    protected $faultNotes;
    
    /**
     * @var string
     */
    protected $faultPriority;
    
    /**
     * @var string
     */
    protected $salutation;
    
    /**
     * @var string
     */
    protected $firstName;
    
    /**
     * @var string
     */
    protected $surname;
    
    /**
     * @var string
     */
    protected $emailAddress;
    
    /**
     * @var MediaModel[]
     */
    protected $media;
    
    /**
     * @var string
     */
    protected $tenantNotes;
    
    /**
     * @var string
     */
    protected $status;
    
    /**
     * @var string
     */
    protected $statusChanged;
    
    /**
     * @var string
     */
    protected $created;
    
    /**
     * @var string
     */
    protected $tenantPresenceRequested;
    
    /**
     * @var string
     */
    protected $tenantAcceptComplete;
    
    /**
     * @var string
     */
    protected $termsAccepted;
    
    /**
     * @var string
     */
    protected $callbackId;
    
    /**
     * @var PropertyPostModel
     */
    protected $property;
    
    /**
     * @var BlockModel
     */
    protected $block;
    
    /**
     * @var JobModel
     */
    protected $job;
    
    /**
     * @var FaultTreeModel
     */
    protected $faultTree;
    
    /**
     * @var string
     */
    protected $worksAuthorisationLimit;
    
    /**
     * @var string
     */
    protected $blockName;
    
    /**
     * @var AssignedAgentModel
     */
    protected $assignedAgent;
    
    /**
     * @var QuoteModel[]
     */
    protected $quotes;
    
    /**
     * @var \DateTime
     */
    protected $quoteEndTime;
    
    /**
     * @var \DateTime
     */
    protected $attendanceDate;

    /**
     * IssueModel constructor.
     * http://api-docs.fixflo.com/#resources-issue
     *
     * @param string $id
     * @param string $tenantId
     * @param string $externalRefTenancyAgreement
     * @param string $title
     * @param string $faultTitle
     * @param string $faultCategory
     * @param AdditionalDetailModel[] $additionalDetails
     * @param string $faultNotes
     * @param string $faultPriority
     * @param string $salutation
     * @param string $firstName
     * @param string $surname
     * @param string $emailAddress
     * @param MediaModel[] $media
     * @param string $tenantNotes
     * @param string $status
     * @param string $statusChanged
     * @param string $created
     * @param string $tenantPresenceRequested
     * @param string $tenantAcceptComplete
     * @param string $termsAccepted
     * @param string $callbackId
     * @param PropertyPostModel $property
     * @param BlockModel $block
     * @param JobModel $job
     * @param FaultTreeModel $faultTree
     * @param string $worksAuthorisationLimit
     * @param string $blockName
     * @param AssignedAgentModel $assignedAgent
     * @param QuoteModel[] $quotes
     * @param \DateTime $quoteEndTime
     * @param \DateTime $attendanceDate
     */
    public function __construct($id, $tenantId, $externalRefTenancyAgreement, $title, $faultTitle, $faultCategory, array $additionalDetails, $faultNotes, $faultPriority, $salutation, $firstName, $surname, $emailAddress, array $media, $tenantNotes, $status, $statusChanged, $created, $tenantPresenceRequested, $tenantAcceptComplete, $termsAccepted, $callbackId, PropertyPostModel $property, BlockModel $block, JobModel $job, FaultTreeModel $faultTree, $worksAuthorisationLimit, $blockName, AssignedAgentModel $assignedAgent, array $quotes, \DateTime $quoteEndTime, \DateTime $attendanceDate)
    {
        $this->id = $id;
        $this->tenantId = $tenantId;
        $this->externalRefTenancyAgreement = $externalRefTenancyAgreement;
        $this->title = $title;
        $this->faultTitle = $faultTitle;
        $this->faultCategory = $faultCategory;
        $this->additionalDetails = $additionalDetails;
        $this->faultNotes = $faultNotes;
        $this->faultPriority = $faultPriority;
        $this->salutation = $salutation;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->emailAddress = $emailAddress;
        $this->media = $media;
        $this->tenantNotes = $tenantNotes;
        $this->status = $status;
        $this->statusChanged = $statusChanged;
        $this->created = $created;
        $this->tenantPresenceRequested = $tenantPresenceRequested;
        $this->tenantAcceptComplete = $tenantAcceptComplete;
        $this->termsAccepted = $termsAccepted;
        $this->callbackId = $callbackId;
        $this->property = $property;
        $this->block = $block;
        $this->job = $job;
        $this->faultTree = $faultTree;
        $this->worksAuthorisationLimit = $worksAuthorisationLimit;
        $this->blockName = $blockName;
        $this->assignedAgent = $assignedAgent;
        $this->quotes = $quotes;
        $this->quoteEndTime = $quoteEndTime;
        $this->attendanceDate = $attendanceDate;
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
    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param string $tenantId
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    /**
     * @return string
     */
    public function getExternalRefTenancyAgreement()
    {
        return $this->externalRefTenancyAgreement;
    }

    /**
     * @param string $externalRefTenancyAgreement
     */
    public function setExternalRefTenancyAgreement($externalRefTenancyAgreement)
    {
        $this->externalRefTenancyAgreement = $externalRefTenancyAgreement;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFaultTitle()
    {
        return $this->faultTitle;
    }

    /**
     * @param string $faultTitle
     */
    public function setFaultTitle($faultTitle)
    {
        $this->faultTitle = $faultTitle;
    }

    /**
     * @return string
     */
    public function getFaultCategory()
    {
        return $this->faultCategory;
    }

    /**
     * @param string $faultCategory
     */
    public function setFaultCategory($faultCategory)
    {
        $this->faultCategory = $faultCategory;
    }

    /**
     * @return AdditionalDetailModel[]
     */
    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    /**
     * @param AdditionalDetailModel[] $additionalDetails
     */
    public function setAdditionalDetails(array $additionalDetails)
    {
        $this->additionalDetails = $additionalDetails;
    }

    /**
     * @return string
     */
    public function getFaultNotes()
    {
        return $this->faultNotes;
    }

    /**
     * @param string $faultNotes
     */
    public function setFaultNotes($faultNotes)
    {
        $this->faultNotes = $faultNotes;
    }

    /**
     * @return string
     */
    public function getFaultPriority()
    {
        return $this->faultPriority;
    }

    /**
     * @param string $faultPriority
     */
    public function setFaultPriority($faultPriority)
    {
        $this->faultPriority = $faultPriority;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param string $salutation
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return MediaModel[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param MediaModel[] $media
     */
    public function setMedia(array $media)
    {
        $this->media = $media;
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
     * @return string
     */
    public function getStatusChanged()
    {
        return $this->statusChanged;
    }

    /**
     * @param string $statusChanged
     */
    public function setStatusChanged($statusChanged)
    {
        $this->statusChanged = $statusChanged;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getTenantPresenceRequested()
    {
        return $this->tenantPresenceRequested;
    }

    /**
     * @param string $tenantPresenceRequested
     */
    public function setTenantPresenceRequested($tenantPresenceRequested)
    {
        $this->tenantPresenceRequested = $tenantPresenceRequested;
    }

    /**
     * @return string
     */
    public function getTenantAcceptComplete()
    {
        return $this->tenantAcceptComplete;
    }

    /**
     * @param string $tenantAcceptComplete
     */
    public function setTenantAcceptComplete($tenantAcceptComplete)
    {
        $this->tenantAcceptComplete = $tenantAcceptComplete;
    }

    /**
     * @return string
     */
    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    /**
     * @param string $termsAccepted
     */
    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = $termsAccepted;
    }

    /**
     * @return string
     */
    public function getCallbackId()
    {
        return $this->callbackId;
    }

    /**
     * @param string $callbackId
     */
    public function setCallbackId($callbackId)
    {
        $this->callbackId = $callbackId;
    }

    /**
     * @return PropertyPostModel
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param PropertyPostModel $property
     */
    public function setProperty(PropertyPostModel $property)
    {
        $this->property = $property;
    }

    /**
     * @return BlockModel
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @param BlockModel $block
     */
    public function setBlock(BlockModel $block)
    {
        $this->block = $block;
    }

    /**
     * @return JobModel
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param JobModel $job
     */
    public function setJob(JobModel $job)
    {
        $this->job = $job;
    }

    /**
     * @return FaultTreeModel
     */
    public function getFaultTree()
    {
        return $this->faultTree;
    }

    /**
     * @param FaultTreeModel $faultTree
     */
    public function setFaultTree(FaultTreeModel $faultTree)
    {
        $this->faultTree = $faultTree;
    }

    /**
     * @return string
     */
    public function getWorksAuthorisationLimit()
    {
        return $this->worksAuthorisationLimit;
    }

    /**
     * @param string $worksAuthorisationLimit
     */
    public function setWorksAuthorisationLimit($worksAuthorisationLimit)
    {
        $this->worksAuthorisationLimit = $worksAuthorisationLimit;
    }

    /**
     * @return string
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * @param string $blockName
     */
    public function setBlockName($blockName)
    {
        $this->blockName = $blockName;
    }

    /**
     * @return AssignedAgentModel
     */
    public function getAssignedAgent()
    {
        return $this->assignedAgent;
    }

    /**
     * @param AssignedAgentModel $assignedAgent
     */
    public function setAssignedAgent(AssignedAgentModel $assignedAgent)
    {
        $this->assignedAgent = $assignedAgent;
    }

    /**
     * @return QuoteModel[]
     */
    public function getQuotes()
    {
        return $this->quotes;
    }

    /**
     * @param QuoteModel[] $quotes
     */
    public function setQuotes(array $quotes)
    {
        $this->quotes = $quotes;
    }

    /**
     * @return \DateTime
     */
    public function getQuoteEndTime()
    {
        return $this->quoteEndTime;
    }

    /**
     * @param \DateTime $quoteEndTime
     */
    public function setQuoteEndTime(\DateTime $quoteEndTime)
    {
        $this->quoteEndTime = $quoteEndTime;
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceDate()
    {
        return $this->attendanceDate;
    }

    /**
     * @param \DateTime $attendanceDate
     */
    public function setAttendanceDate(\DateTime $attendanceDate)
    {
        $this->attendanceDate = $attendanceDate;
    }
}