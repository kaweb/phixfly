<?php

namespace Kaweb\Phixfly\Models;

class ApiWebhookModel implements ModelInterface
{
    /**
     * @var string
     */
    protected $targetUrl;

    /**
     * @var string
     */
    protected $event;

    /**
     * ApiWebhookModel constructor.
     * http://api-docs.fixflo.com/#resources-api-web-hook
     *
     * @param string $targetUrl
     * @param string $event
     */
    public function __construct($targetUrl, $event)
    {
        $this->targetUrl = $targetUrl;
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
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