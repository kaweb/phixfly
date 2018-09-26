<?php

namespace Kaweb\Phixfly\Models;

class LandlordPropertyModelTest extends \PHPUnit\Framework\TestCase
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
     * @var AddressModelTestTest
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
     * @param AddressModelTestTest $address
     */
    public function __construct($id, $landlordId, $propertyId, \DateTime $dateFrom, \DateTime $dateTo, AddressModelTestTest $address)
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
    public function getLandlordId()
    {
        return $this->landlordId;
    }

    /**
     * @param string $landlordId
     */
    public function setLandlordId($landlordId)
    {
        $this->landlordId = $landlordId;
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
}