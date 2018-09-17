<?php

namespace Kaweb\FixfloClient\Models;

class IssueDraftModel
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var \DateTime
     */
    protected $updated;
    
    /**
     * @var string
     */
    protected $issueTitle;
    
    /**
     * @var int
     */
    protected $faultId;
    
    /**
     * @var string
     */
    protected $faultNotes;
    
    /**
     * @var IssueDraftMediaModel[]
     */
    protected $issueDraftMedia;
    
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
    protected $contactNumber;
    
    /**
     * @var string
     */
    protected $contactNumberAlt;
    
    /**
     * @var AddressModel
     */
    protected $address;
    
    /**
     * @var int
     */
    protected $propertyId;
    
    /**
     * @var string
     */
    protected $externalPropertyRef;

    /**
     * IssueDraftModel constructor.
     * http://api-docs.fixflo.com/#resources-issuedraft
     *
     * @param int $id
     * @param \DateTime $updated
     * @param string $issueTitle
     * @param int $faultId
     * @param string $faultNotes
     * @param IssueDraftMediaModel[] $issueDraftMedia
     * @param string $title
     * @param string $firstName
     * @param string $surname
     * @param string $contactNumber
     * @param string $contactNumberAlt
     * @param AddressModel $address
     * @param int $propertyId
     * @param string $externalPropertyRef
     */
    public function __construct(int $id, \DateTime $updated, string $issueTitle, int $faultId, string $faultNotes, array $issueDraftMedia, string $title, string $firstName, string $surname, string $contactNumber, string $contactNumberAlt, AddressModel $address, int $propertyId, string $externalPropertyRef)
    {
        $this->id = $id;
        $this->updated = $updated;
        $this->issueTitle = $issueTitle;
        $this->faultId = $faultId;
        $this->faultNotes = $faultNotes;
        $this->issueDraftMedia = $issueDraftMedia;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->contactNumber = $contactNumber;
        $this->contactNumberAlt = $contactNumberAlt;
        $this->address = $address;
        $this->propertyId = $propertyId;
        $this->externalPropertyRef = $externalPropertyRef;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated(): \DateTime
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getIssueTitle(): string
    {
        return $this->issueTitle;
    }

    /**
     * @param string $issueTitle
     */
    public function setIssueTitle(string $issueTitle)
    {
        $this->issueTitle = $issueTitle;
    }

    /**
     * @return int
     */
    public function getFaultId(): int
    {
        return $this->faultId;
    }

    /**
     * @param int $faultId
     */
    public function setFaultId(int $faultId)
    {
        $this->faultId = $faultId;
    }

    /**
     * @return IssueDraftMediaModel[]
     */
    public function getIssueDraftMedia(): array
    {
        return $this->issueDraftMedia;
    }

    /**
     * @param IssueDraftMediaModel[] $issueDraftMedia
     */
    public function setIssueDraftMedia(array $issueDraftMedia)
    {
        $this->issueDraftMedia = $issueDraftMedia;
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

    /**
     * @return int
     */
    public function getPropertyId(): int
    {
        return $this->propertyId;
    }

    /**
     * @param int $propertyId
     */
    public function setPropertyId(int $propertyId)
    {
        $this->propertyId = $propertyId;
    }

    /**
     * @return string
     */
    public function getExternalPropertyRef(): string
    {
        return $this->externalPropertyRef;
    }

    /**
     * @param string $externalPropertyRef
     */
    public function setExternalPropertyRef(string $externalPropertyRef)
    {
        $this->externalPropertyRef = $externalPropertyRef;
    }
}