<?php

namespace Kaweb\Phixfly\Models;

class IssueSummaryModel
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
     * @var AddressModel
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
     * @param AddressModel $address
     */
    public function __construct(string $id, string $issueId, int $statusId, string $status, \DateTime $statusChanged, \DateTime $created, string $issueTitle, AddressModel $address)
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
    public function getIssueId(): string
    {
        return $this->issueId;
    }

    /**
     * @param string $issueId
     */
    public function setIssueId(string $issueId)
    {
        $this->issueId = $issueId;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     */
    public function setStatusId(int $statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getStatusChanged(): \DateTime
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
    public function getCreated(): \DateTime
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
    public function getIssueTitle(): string
    {
        return $this->issueTitle;
    }

    /**
     * @param string $issueTitle
     */
    public function setIssueTitle(string $issueTitle)
    {
        $this->issueTitle = $issueTitle;
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