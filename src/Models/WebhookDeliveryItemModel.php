<?php

namespace Kaweb\FixfloClient\Models;

class WebhookDeliveryItemModel
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
    public function __construct(string $id, string $webHookUrl, \DateTime $sendTime, bool $failed, string $failureMessage, string $responseStatus, string $requestBody, string $responseBody)
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getWebHookUrl(): string
    {
        return $this->webHookUrl;
    }

    /**
     * @param string $webHookUrl
     */
    public function setWebHookUrl(string $webHookUrl)
    {
        $this->webHookUrl = $webHookUrl;
    }

    /**
     * @return \DateTime
     */
    public function getSendTime(): \DateTime
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
    public function isFailed(): bool
    {
        return $this->failed;
    }

    /**
     * @param bool $failed
     */
    public function setFailed(bool $failed)
    {
        $this->failed = $failed;
    }

    /**
     * @return string
     */
    public function getFailureMessage(): string
    {
        return $this->failureMessage;
    }

    /**
     * @param string $failureMessage
     */
    public function setFailureMessage(string $failureMessage)
    {
        $this->failureMessage = $failureMessage;
    }

    /**
     * @return string
     */
    public function getResponseStatus(): string
    {
        return $this->responseStatus;
    }

    /**
     * @param string $responseStatus
     */
    public function setResponseStatus(string $responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    /**
     * @return string
     */
    public function getRequestBody(): string
    {
        return $this->requestBody;
    }

    /**
     * @param string $requestBody
     */
    public function setRequestBody(string $requestBody)
    {
        $this->requestBody = $requestBody;
    }

    /**
     * @return string
     */
    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    /**
     * @param string $responseBody
     */
    public function setResponseBody(string $responseBody)
    {
        $this->responseBody = $responseBody;
    }
}