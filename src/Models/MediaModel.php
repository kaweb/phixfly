<?php

namespace Kaweb\Phixfly\Models;

class MediaModel implements ModelInterface
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
    public function __construct($url, $contentType, $mediaType, $mediaTypeDescription, $shortDesc, $addedByUserTypeId)
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

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
    }

    /**
     * @return string
     */
    public function getMediaTypeDescription()
    {
        return $this->mediaTypeDescription;
    }

    /**
     * @param string $mediaTypeDescription
     */
    public function setMediaTypeDescription($mediaTypeDescription)
    {
        $this->mediaTypeDescription = $mediaTypeDescription;
    }

    /**
     * @return string
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * @param string $shortDesc
     */
    public function setShortDesc($shortDesc)
    {
        $this->shortDesc = $shortDesc;
    }

    /**
     * @return string
     */
    public function getAddedByUserTypeId()
    {
        return $this->addedByUserTypeId;
    }

    /**
     * @param string $addedByUserTypeId
     */
    public function setAddedByUserTypeId($addedByUserTypeId)
    {
        $this->addedByUserTypeId = $addedByUserTypeId;
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