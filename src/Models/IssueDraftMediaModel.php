<?php

namespace Kaweb\FixfloClient\Models;

class IssueDraftMediaModel
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var int
     */
    protected $issueDraftId;
    
    /**
     * @var string
     */
    protected $url;
    
    /**
     * @var string
     */
    protected $contentType;
    
    /**
     * @var string
     */
    protected $shortDesc;
    
    /**
     * @var string
     */
    protected $encodedByteData;

    /**
     * IssueDraftMediaModel constructor.
     * http://api-docs.fixflo.com/#resources-issuedraftmedia
     *
     * @param int $id
     * @param int $issueDraftId
     * @param string $url
     * @param string $contentType
     * @param string $shortDesc
     * @param string $encodedByteData
     */
    public function __construct(int $id, int $issueDraftId, string $url, string $contentType, string $shortDesc, string $encodedByteData)
    {
        $this->id = $id;
        $this->issueDraftId = $issueDraftId;
        $this->url = $url;
        $this->contentType = $contentType;
        $this->shortDesc = $shortDesc;
        $this->encodedByteData = $encodedByteData;
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
    public function getIssueDraftId(): int
    {
        return $this->issueDraftId;
    }

    /**
     * @param int $issueDraftId
     */
    public function setIssueDraftId(int $issueDraftId)
    {
        $this->issueDraftId = $issueDraftId;
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

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getShortDesc(): string
    {
        return $this->shortDesc;
    }

    /**
     * @param string $shortDesc
     */
    public function setShortDesc(string $shortDesc)
    {
        $this->shortDesc = $shortDesc;
    }
}