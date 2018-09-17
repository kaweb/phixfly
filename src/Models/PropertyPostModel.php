<?php

namespace Kaweb\FixfloClient\Models;

class PropertyPostModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $blockId;

    /**
     * @var string
     */
    protected $externalPropertyRef;

    /**
     * @var string
     */
    protected $keyReference;

    /**
     * @var int
     */
    protected $propertyAddressId;

    /**
     * @var AddressModel
     */
    protected $address;

    /**
     * @var AssignedAgentModel
     */
    protected $assignedAgent;

    /**
     * PropertyGetModel constructor.
     * http://api-docs.fixflo.com/#resources-property
     *
     * @param int $id
     * @param int $blockId
     * @param string $externalPropertyRef
     * @param string $keyReference
     * @param int $propertyAddressId
     * @param AddressModel $address
     * @param AssignedAgentModel $assignedAgent
     */
    public function __construct(int $id, int $blockId, string $externalPropertyRef, string $keyReference, int $propertyAddressId, AddressModel $address, AssignedAgentModel $assignedAgent)
    {
        $this->id = $id;
        $this->blockId = $blockId;
        $this->externalPropertyRef = $externalPropertyRef;
        $this->keyReference = $keyReference;
        $this->propertyAddressId = $propertyAddressId;
        $this->address = $address;
        $this->assignedAgent = $assignedAgent;
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
     * @return int
     */
    public function getPropertyAddressId(): int
    {
        return $this->propertyAddressId;
    }

    /**
     * @param int $propertyAddressId
     */
    public function setPropertyAddressId(int $propertyAddressId)
    {
        $this->propertyAddressId = $propertyAddressId;
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
     * @return AssignedAgentModel
     */
    public function getAssignedAgent(): AssignedAgentModel
    {
        return $this->assignedAgent;
    }

    /**
     * @param AssignedAgentModel $assignedAgent
     */
    public function setAssignedAgent(AssignedAgentModel $assignedAgent)
    {
        $this->assignedAgent = $assignedAgent;
    }
}