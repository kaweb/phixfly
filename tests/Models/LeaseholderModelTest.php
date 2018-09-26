<?php

namespace Kaweb\Phixfly\Models;

class LeaseholderModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $externalLeaseholderReference;
    
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
     * @var AddressModelTestTest
     */
    protected $address;

    /**
     * LeaseholderModel constructor.
     * http://api-docs.fixflo.com/#resources-leaseholder
     *
     * @param string $id
     * @param string $externalLeaseholderReference
     * @param string $companyName
     * @param string $title
     * @param string $firstName
     * @param string $surname
     * @param string $emailAddress
     * @param string $contactNumber
     * @param string $contactNumberAlt
     * @param string $displayName
     * @param string $emailCC
     * @param bool $isDeleted
     * @param \DateTime $updateDate
     * @param AddressModelTestTest $address
     */
    public function __construct($id, $externalLeaseholderReference, $companyName, $title, $firstName, $surname, $emailAddress, $contactNumber, $contactNumberAlt, $displayName, $emailCC, $isDeleted, \DateTime $updateDate, AddressModelTestTest $address)
    {
        $this->id = $id;
        $this->externalLeaseholderReference = $externalLeaseholderReference;
        $this->companyName = $companyName;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->emailAddress = $emailAddress;
        $this->contactNumber = $contactNumber;
        $this->contactNumberAlt = $contactNumberAlt;
        $this->displayName = $displayName;
        $this->emailCC = $emailCC;
        $this->isDeleted = $isDeleted;
        $this->updateDate = $updateDate;
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
    public function getExternalLeaseholderReference()
    {
        return $this->externalLeaseholderReference;
    }

    /**
     * @param string $externalLeaseholderReference
     */
    public function setExternalLeaseholderReference($externalLeaseholderReference)
    {
        $this->externalLeaseholderReference = $externalLeaseholderReference;
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