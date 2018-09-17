<?php

namespace Kaweb\Phixfly\Models;

class PropertyAddressModel implements ModelInterface
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
     * @var AddressModel
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
     * @param AddressModel $address
     */
    public function __construct($id, $propertyId, $externalPropertyRef, $keyReference, AddressModel $address)
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
     * @return AddressModel
     */
    public function getAddress()
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
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        // TODO: Implement toArray() method.
    }
}