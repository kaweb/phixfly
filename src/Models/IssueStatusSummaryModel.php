<?php

namespace Kaweb\Phixfly\Models;

class IssueStatusSummaryModel implements ModelInterface
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
    public function __construct($statusId, $status, $label, $htmlColour, $htmlColourHi, $count)
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
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getHtmlColour()
    {
        return $this->htmlColour;
    }

    /**
     * @param string $htmlColour
     */
    public function setHtmlColour($htmlColour)
    {
        $this->htmlColour = $htmlColour;
    }

    /**
     * @return string
     */
    public function getHtmlColourHi()
    {
        return $this->htmlColourHi;
    }

    /**
     * @param string $htmlColourHi
     */
    public function setHtmlColourHi($htmlColourHi)
    {
        $this->htmlColourHi = $htmlColourHi;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
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