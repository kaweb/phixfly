<?php

namespace Kaweb\Phixfly\Models;

class LeaseholderPropertyModel
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
     * @var AddressModel
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
     * @param AddressModel $address
     * @param int $blockId
     * @param string $externalBlockRef
     * @param \DateTime $updateDate
     */
    public function __construct(int $id, string $leaseHolderId, int $propertyId, \DateTime $dateFrom, \DateTime $dateTo, AddressModel $address, int $blockId, string $externalBlockRef, \DateTime $updateDate)
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
     * @return string
     */
    public function getLeaseHolderId(): string
    {
        return $this->leaseHolderId;
    }

    /**
     * @param string $leaseHolderId
     */
    public function setLeaseHolderId(string $leaseHolderId)
    {
        $this->leaseHolderId = $leaseHolderId;
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
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime
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
    public function getDateTo(): \DateTime
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
    public function getBlockId(): int
    {
        return $this->blockId;
    }

    /**
     * @param int $blockId
     */
    public function setBlockId(int $blockId)
    {
        $this->blockId = $blockId;
    }

    /**
     * @return string
     */
    public function getExternalBlockRef(): string
    {
        return $this->externalBlockRef;
    }

    /**
     * @param string $externalBlockRef
     */
    public function setExternalBlockRef(string $externalBlockRef)
    {
        $this->externalBlockRef = $externalBlockRef;
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
}