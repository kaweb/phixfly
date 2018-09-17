<?php

namespace Kaweb\Phixfly\Models;

class IssueStatusSummaryModel
{
    /**
     * @var int
     */
    protected $statusId;
    
    /**
     * @var string
     */
    protected $status;
    
    /**
     * @var string
     */
    protected $label;
    
    /**
     * @var string
     */
    protected $htmlColour;
    
    /**
     * @var string
     */
    protected $htmlColourHi;
    
    /**
     * @var int
     */
    protected $count;

    /**
     * IssueStatusSummaryModel constructor.
     * http://api-docs.fixflo.com/#resources-issuestatussummary
     *
     * @param int $statusId
     * @param string $status
     * @param string $label
     * @param string $htmlColour
     * @param string $htmlColourHi
     * @param int $count
     */
    public function __construct(int $statusId, string $status, string $label, string $htmlColour, string $htmlColourHi, int $count)
    {
        $this->statusId = $statusId;
        $this->status = $status;
        $this->label = $label;
        $this->htmlColour = $htmlColour;
        $this->htmlColourHi = $htmlColourHi;
        $this->count = $count;
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
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getHtmlColour(): string
    {
        return $this->htmlColour;
    }

    /**
     * @param string $htmlColour
     */
    public function setHtmlColour(string $htmlColour)
    {
        $this->htmlColour = $htmlColour;
    }

    /**
     * @return string
     */
    public function getHtmlColourHi(): string
    {
        return $this->htmlColourHi;
    }

    /**
     * @param string $htmlColourHi
     */
    public function setHtmlColourHi(string $htmlColourHi)
    {
        $this->htmlColourHi = $htmlColourHi;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->count = $count;
    }
}