<?php

namespace Kaweb\FixfloClient\Models;

class LandlordModel
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $externalRef;
    
    /**
     * @var string
     */
    protected $companyName;
    
    /**
     * @var string
     */
    protected $title;
    
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
     * @var string
     */
    protected $contactNumber;
    
    /**
     * @var string
     */
    protected $contactNumberAlt;
    
    /**
     * @var string
     */
    protected $displayName;
    
    /**
     * @var int
     */
    protected $worksAuthorisationLimit;
    
    /**
     * @var string
     */
    protected $emailCC;
    
    /**
     * @var bool
     */
    protected $isDeleted;
    
    /**
     * @var \DateTime
     */
    protected $updateDate;
    
    /**
     * @var AssignedAgentModel
     */
    protected $assignedAgent;
    
    /**
     * @var AddressModel
     */
    protected $address;

    /**
     * LandlordModel constructor.
     * http://api-docs.fixflo.com/#resources-landlord
     * 
     * @param string $id
     * @param string $externalRef
     * @param string $companyName
     * @param string $title
     * @param string $firstName
     * @param string $surname
     * @param string $emailAddress
     * @param string $contactNumber
     * @param string $contactNumberAlt
     * @param string $displayName
     * @param int $worksAuthorisationLimit
     * @param string $emailCC
     * @param bool $isDeleted
     * @param \DateTime $updateDate
     * @param AssignedAgentModel $assignedAgent
     * @param AddressModel $address
     */
    public function __construct(string $id, string $externalRef, string $companyName, string $title, string $firstName, string $surname, string $emailAddress, string $contactNumber, string $contactNumberAlt, string $displayName, int $worksAuthorisationLimit, string $emailCC, bool $isDeleted, \DateTime $updateDate, AssignedAgentModel $assignedAgent, AddressModel $address)
    {
        $this->id = $id;
        $this->externalRef = $externalRef;
        $this->companyName = $companyName;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->emailAddress = $emailAddress;
        $this->contactNumber = $contactNumber;
        $this->contactNumberAlt = $contactNumberAlt;
        $this->displayName = $displayName;
        $this->worksAuthorisationLimit = $worksAuthorisationLimit;
        $this->emailCC = $emailCC;
        $this->isDeleted = $isDeleted;
        $this->updateDate = $updateDate;
        $this->assignedAgent = $assignedAgent;
        $this->address = $address;
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
    public function getExternalRef(): string
    {
        return $this->externalRef;
    }

    /**
     * @param string $externalRef
     */
    public function setExternalRef(string $externalRef)
    {
        $this->externalRef = $externalRef;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getContactNumber(): string
    {
        return $this->contactNumber;
    }

    /**
     * @param string $contactNumber
     */
    public function setContactNumber(string $contactNumber)
    {
        $this->contactNumber = $contactNumber;
    }

    /**
     * @return string
     */
    public function getContactNumberAlt(): string
    {
        return $this->contactNumberAlt;
    }

    /**
     * @param string $contactNumberAlt
     */
    public function setContactNumberAlt(string $contactNumberAlt)
    {
        $this->contactNumberAlt = $contactNumberAlt;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return int
     */
    public function getWorksAuthorisationLimit(): int
    {
        return $this->worksAuthorisationLimit;
    }

    /**
     * @param int $worksAuthorisationLimit
     */
    public function setWorksAuthorisationLimit(int $worksAuthorisationLimit)
    {
        $this->worksAuthorisationLimit = $worksAuthorisationLimit;
    }

    /**
     * @return string
     */
    public function getEmailCC(): string
    {
        return $this->emailCC;
    }

    /**
     * @param string $emailCC
     */
    public function setEmailCC(string $emailCC)
    {
        $this->emailCC = $emailCC;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(bool $isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate(): \DateTime
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate(\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return AssignedAgentModel
     */
    public function getAssignedAgent(): AssignedAgentModel
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
     * @return AddressModel
     */
    public function getAddress(): AddressModel
    {
        return $this->address;
    }

    /**
     * @param AddressModel $address
     */
    public function setAddress(AddressModel $address)
    {
        $this->address = $address;
    }
}