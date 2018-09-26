<?php

namespace Kaweb\Phixfly\Models;

class LeaseholderPropertyModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $leaseHolderId;
    
    /**
     * @var int
     */
    protected $propertyId;
    
    /**
     * @var \DateTime
     */
    protected $dateFrom;
    
    /**
     * @var \DateTime
     */
    protected $dateTo;
    
    /**
     * @var AddressModelTestTest
     */
    protected $address;
    
    /**
     * @var int
     */
    protected $blockId;
    
    /**
     * @var string
     */
    protected $externalBlockRef;
    
    /**
     * @var \DateTime
     */
    protected $updateDate;

    /**
     * LeaseholderPropertyModel constructor.
     * http://api-docs.fixflo.com/#resources-leaseholderproperty
     *
     * @param int $id
     * @param string $leaseHolderId
     * @param int $propertyId
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     * @param AddressModelTestTest $address
     * @param int $blockId
     * @param string $externalBlockRef
     * @param \DateTime $updateDate
     */
    public function __construct($id, $leaseHolderId, $propertyId, \DateTime $dateFrom, \DateTime $dateTo, AddressModelTestTest $address, $blockId, $externalBlockRef, \DateTime $updateDate)
    {
        $this->id = $id;
        $this->leaseHolderId = $leaseHolderId;
        $this->propertyId = $propertyId;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->address = $address;
        $this->blockId = $blockId;
        $this->externalBlockRef = $externalBlockRef;
        $this->updateDate = $updateDate;
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
     * @return string
     */
    public function getLeaseHolderId()
    {
        return $this->leaseHolderId;
    }

    /**
     * @param string $leaseHolderId
     */
    public function setLeaseHolderId($leaseHolderId)
    {
        $this->leaseHolderId = $leaseHolderId;
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
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param \DateTime $dateFrom
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param \DateTime $dateTo
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
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

    /**
     * @return int
     */
    public function getBlockId()
    {
        return $this->blockId;
    }

    /**
     * @param int $blockId
     */
    public function setBlockId($blockId)
    {
        $this->blockId = $blockId;
    }

    /**
     * @return string
     */
    public function getExternalBlockRef()
    {
        return $this->externalBlockRef;
    }

    /**
     * @param string $externalBlockRef
     */
    public function setExternalBlockRef($externalBlockRef)
    {
        $this->externalBlockRef = $externalBlockRef;
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
}