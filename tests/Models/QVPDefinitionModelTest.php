<?php

namespace Kaweb\Phixfly\Models;

class QVPDefinitionModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var int
     */
    protected $qvpTypeId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $explanation;

    /**
     * @var string
     */
    protected $url;

    /**
     * QVPDefinitionModel constructor.
     * http://api-docs.fixflo.com/#resources-qvp-definition
     *
     * @param int $qvpTypeId
     * @param string $title
     * @param string $explanation
     * @param string $url
     */
    public function __construct($qvpTypeId, $title, $explanation, $url)
    {
        $this->qvpTypeId = $qvpTypeId;
        $this->title = $title;
        $this->explanation = $explanation;
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getQvpTypeId()
    {
        return $this->qvpTypeId;
    }

    /**
     * @param int $qvpTypeId
     */
    public function setQvpTypeId($qvpTypeId)
    {
        $this->qvpTypeId = $qvpTypeId;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * @param string $explanation
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}