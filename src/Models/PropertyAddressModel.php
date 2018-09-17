<?php

namespace Kaweb\FixfloClient\Models;

class PropertyAddressModel
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
    public function __construct(int $id, int $propertyId, string $externalPropertyRef, string $keyReference, AddressModel $address)
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

    /**
     * @return string
     */
    public function getKeyReference(): string
    {
        return $this->keyReference;
    }

    /**
     * @param string $keyReference
     */
    public function setKeyReference(string $keyReference)
    {
        $this->keyReference = $keyReference;
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