<?php

namespace Kaweb\Phixfly\Models;

class MediaModel
{
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
    protected $mediaType;
    
    /**
     * @var string
     */
    protected $mediaTypeDescription;
    
    /**
     * @var string
     */
    protected $shortDesc;
    
    /**
     * @var string
     */
    protected $addedByUserTypeId;

    /**
     * MediaModel constructor.
     * http://api-docs.fixflo.com/#resources-media
     *
     * @param string $url
     * @param string $contentType
     * @param string $mediaType
     * @param string $mediaTypeDescription
     * @param string $shortDesc
     * @param string $addedByUserTypeId
     */
    public function __construct(string $url, string $contentType, string $mediaType, string $mediaTypeDescription, string $shortDesc, string $addedByUserTypeId)
    {
        $this->url = $url;
        $this->contentType = $contentType;
        $this->mediaType = $mediaType;
        $this->mediaTypeDescription = $mediaTypeDescription;
        $this->shortDesc = $shortDesc;
        $this->addedByUserTypeId = $addedByUserTypeId;
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
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     */
    public function setMediaType(string $mediaType)
    {
        $this->mediaType = $mediaType;
    }

    /**
     * @return string
     */
    public function getMediaTypeDescription(): string
    {
        return $this->mediaTypeDescription;
    }

    /**
     * @param string $mediaTypeDescription
     */
    public function setMediaTypeDescription(string $mediaTypeDescription)
    {
        $this->mediaTypeDescription = $mediaTypeDescription;
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

    /**
     * @return string
     */
    public function getAddedByUserTypeId(): string
    {
        return $this->addedByUserTypeId;
    }

    /**
     * @param string $addedByUserTypeId
     */
    public function setAddedByUserTypeId(string $addedByUserTypeId)
    {
        $this->addedByUserTypeId = $addedByUserTypeId;
    }
}