<?php

namespace Kaweb\Phixfly\Models;

class BlockModelTest extends \PHPUnit\Framework\TestCase
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
     * @var AddressModelTest
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
     * @var AssignedAgentModelTest
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
     * @param AddressModelTest $address
     * @param string $keyReference
     * @param \DateTime $managementStartDate
     * @param \DateTime $managementEndDate
     * @param int $estateId
     * @param string $externalEstateRef
     * @param string $landlordId
     * @param string $externalLandlordRef
     * @param AssignedAgentModelTest $assignedAgent
     * @param \DateTime $updateDate
     */
    public function __construct($id, $externalBlockRef, $isStandAlone, $name, AddressModelTest $address, $keyReference, \DateTime $managementStartDate, \DateTime $managementEndDate, $estateId, $externalEstateRef, $landlordId, $externalLandlordRef, AssignedAgentModelTest $assignedAgent, \DateTime $updateDate)
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return bool
     */
    public function isStandAlone()
    {
        return $this->isStandAlone;
    }

    /**
     * @param bool $isStandAlone
     */
    public function setIsStandAlone($isStandAlone)
    {
        $this->isStandAlone = $isStandAlone;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \DateTime
     */
    public function getManagementStartDate()
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
    public function getManagementEndDate()
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
    public function getEstateId()
    {
        return $this->estateId;
    }

    /**
     * @param int $estateId
     */
    public function setEstateId($estateId)
    {
        $this->estateId = $estateId;
    }

    /**
     * @return string
     */
    public function getExternalEstateRef()
    {
        return $this->externalEstateRef;
    }

    /**
     * @param string $externalEstateRef
     */
    public function setExternalEstateRef($externalEstateRef)
    {
        $this->externalEstateRef = $externalEstateRef;
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
     * @return string
     */
    public function getExternalLandlordRef()
    {
        return $this->externalLandlordRef;
    }

    /**
     * @param string $externalLandlordRef
     */
    public function setExternalLandlordRef($externalLandlordRef)
    {
        $this->externalLandlordRef = $externalLandlordRef;
    }

    /**
     * @return AssignedAgentModelTest
     */
    public function getAssignedAgent()
    {
        return $this->assignedAgent;
    }

    /**
     * @param AssignedAgentModelTest $assignedAgent
     */
    public function setAssignedAgent(AssignedAgentModelTest $assignedAgent)
    {
        $this->assignedAgent = $assignedAgent;
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