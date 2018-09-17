<?php

namespace Kaweb\Phixfly\Models;

class BlockModel
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $externalBlockRef;

    /**
     * @var bool
     */
    protected $isStandAlone;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var AddressModel
     */
    protected $address;

    /**
     * @var string
     */
    protected $keyReference;

    /**
     * @var \DateTime
     */
    protected $managementStartDate;

    /**
     * @var \DateTime
     */
    protected $managementEndDate;

    /**
     * @var int
     */
    protected $estateId;

    /**
     * @var string
     */
    protected $externalEstateRef;

    /**
     * @var string
     */
    protected $landlordId;

    /**
     * @var string
     */
    protected $externalLandlordRef;

    /**
     * @var AssignedAgentModel
     */
    protected $assignedAgent;

    /**
     * @var \DateTime
     */
    protected $updateDate;

    /**
     * BlockModel constructor.
     * http://api-docs.fixflo.com/#resources-block
     *
     * @param string $id
     * @param string $externalBlockRef
     * @param bool $isStandAlone
     * @param string $name
     * @param AddressModel $address
     * @param string $keyReference
     * @param \DateTime $managementStartDate
     * @param \DateTime $managementEndDate
     * @param int $estateId
     * @param string $externalEstateRef
     * @param string $landlordId
     * @param string $externalLandlordRef
     * @param AssignedAgentModel $assignedAgent
     * @param \DateTime $updateDate
     */
    public function __construct(string $id, string $externalBlockRef, bool $isStandAlone, string $name, AddressModel $address, string $keyReference, \DateTime $managementStartDate, \DateTime $managementEndDate, int $estateId, string $externalEstateRef, string $landlordId, string $externalLandlordRef, AssignedAgentModel $assignedAgent, \DateTime $updateDate)
    {
        $this->id = $id;
        $this->externalBlockRef = $externalBlockRef;
        $this->isStandAlone = $isStandAlone;
        $this->name = $name;
        $this->address = $address;
        $this->keyReference = $keyReference;
        $this->managementStartDate = $managementStartDate;
        $this->managementEndDate = $managementEndDate;
        $this->estateId = $estateId;
        $this->externalEstateRef = $externalEstateRef;
        $this->landlordId = $landlordId;
        $this->externalLandlordRef = $externalLandlordRef;
        $this->assignedAgent = $assignedAgent;
        $this->updateDate = $updateDate;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
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
     * @return bool
     */
    public function isStandAlone(): bool
    {
        return $this->isStandAlone;
    }

    /**
     * @param bool $isStandAlone
     */
    public function setIsStandAlone(bool $isStandAlone)
    {
        $this->isStandAlone = $isStandAlone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     * @return \DateTime
     */
    public function getManagementStartDate(): \DateTime
    {
        return $this->managementStartDate;
    }

    /**
     * @param \DateTime $managementStartDate
     */
    public function setManagementStartDate(\DateTime $managementStartDate)
    {
        $this->managementStartDate = $managementStartDate;
    }

    /**
     * @return \DateTime
     */
    public function getManagementEndDate(): \DateTime
    {
        return $this->managementEndDate;
    }

    /**
     * @param \DateTime $managementEndDate
     */
    public function setManagementEndDate(\DateTime $managementEndDate)
    {
        $this->managementEndDate = $managementEndDate;
    }

    /**
     * @return int
     */
    public function getEstateId(): int
    {
        return $this->estateId;
    }

    /**
     * @param int $estateId
     */
    public function setEstateId(int $estateId)
    {
        $this->estateId = $estateId;
    }

    /**
     * @return string
     */
    public function getExternalEstateRef(): string
    {
        return $this->externalEstateRef;
    }

    /**
     * @param string $externalEstateRef
     */
    public function setExternalEstateRef(string $externalEstateRef)
    {
        $this->externalEstateRef = $externalEstateRef;
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
     * @return string
     */
    public function getExternalLandlordRef(): string
    {
        return $this->externalLandlordRef;
    }

    /**
     * @param string $externalLandlordRef
     */
    public function setExternalLandlordRef(string $externalLandlordRef)
    {
        $this->externalLandlordRef = $externalLandlordRef;
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