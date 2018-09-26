<?php

namespace Kaweb\Phixfly\Models;

class PropertyAddressModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var int
     */
    protected $propertyId;
    
    /**
     * @var string
     */
    protected $externalPropertyRef;
    
    /**
     * @var string
     */
    protected $keyReference;
    
    /**
     * @var AddressModelTest
     */
    protected $address;

    /**
     * PropertyAddressModel constructor.
     * http://api-docs.fixflo.com/#resources-propertyaddress
     *
     * @param int $id
     * @param int $propertyId
     * @param string $externalPropertyRef
     * @param string $keyReference
     * @param AddressModelTest $address
     */
    public function __construct($id, $propertyId, $externalPropertyRef, $keyReference, AddressModelTest $address)
    {
        $this->id = $id;
        $this->propertyId = $propertyId;
        $this->externalPropertyRef = $externalPropertyRef;
        $this->keyReference = $keyReference;
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

    /**
     * @return string
     */
    public function getKeyReference()
    {
        return $this->keyReference;
    }

    /**
     * @param string $keyReference
     */
    public function setKeyReference($keyReference)
    {
        $this->keyReference = $keyReference;
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
}