<?php

namespace Kaweb\Phixfly\Models;

class WebhookDeliveryItemModel extends BaseModel
{
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $webHookUrl;
    
    /**
     * @var \DateTime
     */
    protected $sendTime;
    
    /**
     * @var bool
     */
    protected $failed;
    
    /**
     * @var string
     */
    protected $failureMessage;
    
    /**
     * @var string
     */
    protected $responseStatus;
    
    /**
     * @var string
     */
    protected $requestBody;
    
    /**
     * @var string
     */
    protected $responseBody;

    /**
     * WebhookDeliveryItemModel constructor.
     * http://api-docs.fixflo.com/#resources-webhook-delivery-item
     *
     * @param string $id
     * @param string $webHookUrl
     * @param \DateTime $sendTime
     * @param bool $failed
     * @param string $failureMessage
     * @param string $responseStatus
     * @param string $requestBody
     * @param string $responseBody
     */
    public function __construct($id, $webHookUrl, \DateTime $sendTime, $failed, $failureMessage, $responseStatus, $requestBody, $responseBody)
    {
        $this->id = $id;
        $this->webHookUrl = $webHookUrl;
        $this->sendTime = $sendTime;
        $this->failed = $failed;
        $this->failureMessage = $failureMessage;
        $this->responseStatus = $responseStatus;
        $this->requestBody = $requestBody;
        $this->responseBody = $responseBody;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getWebHookUrl()
    {
        return $this->webHookUrl;
    }

    /**
     * @param string $webHookUrl
     */
    public function setWebHookUrl($webHookUrl)
    {
        $this->webHookUrl = $webHookUrl;
    }

    /**
     * @return \DateTime
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * @param \DateTime $sendTime
     */
    public function setSendTime(\DateTime $sendTime)
    {
        $this->sendTime = $sendTime;
    }

    /**
     * @return bool
     */
    public function isFailed()
    {
        return $this->failed;
    }

    /**
     * @param bool $failed
     */
    public function setFailed($failed)
    {
        $this->failed = $failed;
    }

    /**
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failureMessage;
    }

    /**
     * @param string $failureMessage
     */
    public function setFailureMessage($failureMessage)
    {
        $this->failureMessage = $failureMessage;
    }

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param string $responseStatus
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    /**
     * @return string
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }

    /**
     * @param string $requestBody
     */
    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }

    /**
     * @return string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * @param string $responseBody
     */
    public function setResponseBody($responseBody)
    {
        $this->responseBody = $responseBody;
    }
}