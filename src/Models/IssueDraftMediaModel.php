<?php

namespace Kaweb\Phixfly\Models;

class IssueDraftMediaModel implements ModelInterface
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
    public function __construct($id, $issueDraftId, $url, $contentType, $shortDesc, $encodedByteData)
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIssueDraftId()
    {
        return $this->issueDraftId;
    }

    /**
     * @param int $issueDraftId
     */
    public function setIssueDraftId($issueDraftId)
    {
        $this->issueDraftId = $issueDraftId;
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
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        // TODO: Implement toArray() method.
    }
}