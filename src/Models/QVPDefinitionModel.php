<?php

namespace Kaweb\Phixfly\Models;

class QVPDefinitionModel
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
    public function __construct(int $qvpTypeId, string $title, string $explanation, string $url)
    {
        $this->qvpTypeId = $qvpTypeId;
        $this->title = $title;
        $this->explanation = $explanation;
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getQvpTypeId(): int
    {
        return $this->qvpTypeId;
    }

    /**
     * @param int $qvpTypeId
     */
    public function setQvpTypeId(int $qvpTypeId)
    {
        $this->qvpTypeId = $qvpTypeId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

    /**
     * @param string $explanation
     */
    public function setExplanation(string $explanation)
    {
        $this->explanation = $explanation;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}