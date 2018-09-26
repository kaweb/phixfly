<?php

namespace Kaweb\Phixfly\Models;

class ContractorModelTest extends \PHPUnit\Framework\TestCase
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
     * @var bool
     */
    protected $isDeleted;

    /**
     * @var ContractorServiceModel[]
     */
    protected $services;

    /**
     * @var AddressModelTest
     */
    protected $address;

    /**
     * @var ContractorCertificationModel[]
     */
    protected $certifications;

    /**
     * @var \DateTime
     */
    protected $updateDate;

    /**
     * ContractorModel constructor.
     * http://api-docs.fixflo.com/#resources-contractor
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
     * @param bool $isDeleted
     * @param array $services
     * @param AddressModelTest $address
     * @param array $certifications
     * @param \DateTime $updateDate
     */
    public function __construct($id, $externalRef, $companyName, $title, $firstName, $surname, $emailAddress, $contactNumber, $contactNumberAlt, $displayName, $isDeleted, array $services, AddressModelTest $address, array $certifications, \DateTime $updateDate)
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
        $this->isDeleted = $isDeleted;
        $this->services = $services;
        $this->address = $address;
        $this->certifications = $certifications;
        $this->updateDate = $updateDate;
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
     * @return ContractorServiceModel[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param ContractorServiceModel[] $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return AddressModelTest
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressModelTest $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return ContractorCertificationModel[]
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * @param ContractorCertificationModel[] $certifications
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;
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
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }
}