<?php

namespace Kaweb\Phixfly\Models;

class LandlordModel extends BaseModel
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
     * @var AssignedAgentModelTestTest
     */
    protected $assignedAgent;
    
    /**
     * @var AddressModelTestTest
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
     * @param AssignedAgentModelTestTest $assignedAgent
     * @param AddressModelTestTest $address
     */
    public function __construct($id, $externalRef, $companyName, $title, $firstName, $surname, $emailAddress, $contactNumber, $contactNumberAlt, $displayName, $worksAuthorisationLimit, $emailCC, $isDeleted, \DateTime $updateDate, AssignedAgentModelTestTest $assignedAgent, AddressModelTestTest $address)
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
    public function getExternalRef()
    {
        return $this->externalRef;
    }

    /**
     * @param string $externalRef
     */
    public function setExternalRef($externalRef)
    {
        $this->externalRef = $externalRef;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
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
     * @return string
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * @param string $contactNumber
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    }

    /**
     * @return string
     */
    public function getContactNumberAlt()
    {
        return $this->contactNumberAlt;
    }

    /**
     * @param string $contactNumberAlt
     */
    public function setContactNumberAlt($contactNumberAlt)
    {
        $this->contactNumberAlt = $contactNumberAlt;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return int
     */
    public function getWorksAuthorisationLimit()
    {
        return $this->worksAuthorisationLimit;
    }

    /**
     * @param int $worksAuthorisationLimit
     */
    public function setWorksAuthorisationLimit($worksAuthorisationLimit)
    {
        $this->worksAuthorisationLimit = $worksAuthorisationLimit;
    }

    /**
     * @return string
     */
    public function getEmailCC()
    {
        return $this->emailCC;
    }

    /**
     * @param string $emailCC
     */
    public function setEmailCC($emailCC)
    {
        $this->emailCC = $emailCC;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
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
     * @return AssignedAgentModelTestTest
     */
    public function getAssignedAgent()
    {
        return $this->assignedAgent;
    }

    /**
     * @param AssignedAgentModelTestTest $assignedAgent
     */
    public function setAssignedAgent(AssignedAgentModelTestTest $assignedAgent)
    {
        $this->assignedAgent = $assignedAgent;
    }

    /**
     * @return AddressModelTestTest
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressModelTestTest $address
     */
    public function setAddress(AddressModelTestTest $address)
    {
        $this->address = $address;
    }
}