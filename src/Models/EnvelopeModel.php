<?php

namespace Kaweb\Phixfly\Models;

class EnvelopeModel
{
    /**
     * @var int
     */
    protected $httpStatusCode;

    /**
     * @var string
     */
    protected $httpStatusCodeDesc;

    /**
     * @var array
     */
    protected $errors;

    /**
     * @var array
     */
    protected $messages;

    /**
     * @var array
     */
    protected $entity;

    /**
     * EnvelopeModel constructor.
     * http://api-docs.fixflo.com/#resources-envelope
     *
     * @param int $httpStatusCode
     * @param string $httpStatusCodeDesc
     * @param string[] $errors
     * @param string[] $messages
     * @param array $entity
     */
    public function __construct(int $httpStatusCode, string $httpStatusCodeDesc, array $errors, array $messages, array $entity)
    {
        $this->httpStatusCode = $httpStatusCode;
        $this->httpStatusCodeDesc = $httpStatusCodeDesc;
        $this->errors = $errors;
        $this->messages = $messages;
        $this->entity = $entity;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @param int $httpStatusCode
     */
    public function setHttpStatusCode(int $httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @return string
     */
    public function getHttpStatusCodeDesc(): string
    {
        return $this->httpStatusCodeDesc;
    }

    /**
     * @param string $httpStatusCodeDesc
     */
    public function setHttpStatusCodeDesc(string $httpStatusCodeDesc)
    {
        $this->httpStatusCodeDesc = $httpStatusCodeDesc;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     */
    public function setMessages(array $messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return array
     */
    public function getEntity(): array
    {
        return $this->entity;
    }

    /**
     * @param array $entity
     */
    public function setEntity(array $entity)
    {
        $this->entity = $entity;
    }
}