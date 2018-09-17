<?php

namespace Kaweb\FixfloClient\Models;

class ContractorModel
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
     * @var AddressModel
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
     * @param AddressModel $address
     * @param array $certifications
     * @param \DateTime $updateDate
     */
    public function __construct(string $id, string $externalRef, string $companyName, string $title, string $firstName, string $surname, string $emailAddress, string $contactNumber, string $contactNumberAlt, string $displayName, bool $isDeleted, array $services, AddressModel $address, array $certifications, \DateTime $updateDate)
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
}