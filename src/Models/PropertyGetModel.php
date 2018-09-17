<?php

namespace Kaweb\FixfloClient\Models;

class PropertyGetModel
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
     * @var int
     */
    protected $propertyAddressId;
    
    /**
     * @var AddressModel
     */
    protected $address;
    
    /**
     * @var \DateTime
     */
    protected $updateDate;
    
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
     * @param int $propertyAddressId
     * @param AddressModel $address
     * @param \DateTime $updateDate
     * @param AssignedAgentModel $assignedAgent
     */
    public function __construct(int $id, int $blockId, string $externalPropertyRef, int $propertyAddressId, AddressModel $address, \DateTime $updateDate, AssignedAgentModel $assignedAgent)
    {
        $this->id = $id;
        $this->blockId = $blockId;
        $this->externalPropertyRef = $externalPropertyRef;
        $this->propertyAddressId = $propertyAddressId;
        $this->address = $address;
        $this->updateDate = $updateDate;
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