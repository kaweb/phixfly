<?php

namespace Kaweb\FixfloClient\Models;

class LandlordPropertyModel
{
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $landlordId;
    
    /**
     * @var int
     */
    private $propertyId;
    
    /**
     * @var \DateTime
     */
    private $dateFrom;
    
    /**
     * @var \DateTime
     */
    private $dateTo;
    
    /**
     * @var AddressModel
     */
    private $address;

    /**
     * LandlordPropertyModel constructor.
     * http://api-docs.fixflo.com/#resources-landlord
     *
     * @param int $id
     * @param string $landlordId
     * @param int $propertyId
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     * @param AddressModel $address
     */
    public function __construct(int $id, string $landlordId, int $propertyId, \DateTime $dateFrom, \DateTime $dateTo, AddressModel $address)
    {
        $this->id = $id;
        $this->landlordId = $landlordId;
        $this->propertyId = $propertyId;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->address = $address;
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
    public function getLandlordId(): string
    {
        return $this->landlordId;
    }

    /**
     * @param string $landlordId
     */
    public function setLandlordId(string $landlordId)
    {
        $this->landlordId = $landlordId;
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
}