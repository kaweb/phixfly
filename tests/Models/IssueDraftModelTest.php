<?php

namespace Kaweb\Phixfly\Models;

class IssueDraftModelTest extends \PHPUnit\Framework\TestCase
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
     * @var AddressModelTest
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
     * @param AddressModelTest $address
     * @param int $propertyId
     * @param string $externalPropertyRef
     */
    public function __construct($id, \DateTime $updated, $issueTitle, $faultId, $faultNotes, $issueDraftMedia, $title, $firstName, $surname, $contactNumber, $contactNumberAlt, AddressModelTest $address, $propertyId, $externalPropertyRef)
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
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
    public function getIssueTitle()
    {
        return $this->issueTitle;
    }

    /**
     * @param string $issueTitle
     */
    public function setIssueTitle($issueTitle)
    {
        $this->issueTitle = $issueTitle;
    }

    /**
     * @return int
     */
    public function getFaultId()
    {
        return $this->faultId;
    }

    /**
     * @param int $faultId
     */
    public function setFaultId($faultId)
    {
        $this->faultId = $faultId;
    }

    /**
     * @return IssueDraftMediaModel[]
     */
    public function getIssueDraftMedia()
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
     * @return AddressModelTest
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressModelTest $address
     */
    public function setAddress(AddressModelTest $address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * @param int $propertyId
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;
    }

    /**
     * @return string
     */
    public function getExternalPropertyRef()
    {
        return $this->externalPropertyRef;
    }

    /**
     * @param string $externalPropertyRef
     */
    public function setExternalPropertyRef($externalPropertyRef)
    {
        $this->externalPropertyRef = $externalPropertyRef;
    }
}