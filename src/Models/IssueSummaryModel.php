<?php

namespace Kaweb\Phixfly\Models;

class IssueSummaryModel extends BaseModel
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $issueId;
    
    /**
     * @var int
     */
    protected $statusId;
    
    /**
     * @var string
     */
    protected $status;
    
    /**
     * @var \DateTime
     */
    protected $statusChanged;
    
    /**
     * @var \DateTime
     */
    protected $created;
    
    /**
     * @var string
     */
    protected $issueTitle;
    
    /**
     * @var AddressModelTestTest
     */
    protected $address;

    /**
     * IssueSummaryModel constructor.
     * http://api-docs.fixflo.com/#resources-issuesummary
     *
     * @param string $id
     * @param string $issueId
     * @param int $statusId
     * @param string $status
     * @param \DateTime $statusChanged
     * @param \DateTime $created
     * @param string $issueTitle
     * @param AddressModelTestTest $address
     */
    public function __construct($id, $issueId, $statusId, $status, \DateTime $statusChanged, \DateTime $created, $issueTitle, AddressModelTestTest $address)
    {
        $this->id = $id;
        $this->issueId = $issueId;
        $this->statusId = $statusId;
        $this->status = $status;
        $this->statusChanged = $statusChanged;
        $this->created = $created;
        $this->issueTitle = $issueTitle;
        $this->address = $address;
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
    public function getIssueId()
    {
        return $this->issueId;
    }

    /**
     * @param string $issueId
     */
    public function setIssueId($issueId)
    {
        $this->issueId = $issueId;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getStatusChanged()
    {
        return $this->statusChanged;
    }

    /**
     * @param \DateTime $statusChanged
     */
    public function setStatusChanged(\DateTime $statusChanged)
    {
        $this->statusChanged = $statusChanged;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getIssueTitle()
    {
        return $this->issueTitle;
    }

    /**
     * @param string $issueTitle
     */
    public function setIssueTitle($issueTitle)
    {
        $this->issueTitle = $issueTitle;
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