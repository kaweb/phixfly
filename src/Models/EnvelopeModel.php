<?php

namespace Kaweb\Phixfly\Models;

class EnvelopeModel implements ModelInterface
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
    public function __construct($httpStatusCode, $httpStatusCodeDesc, array $errors, array $messages, array $entity)
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
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @param int $httpStatusCode
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @return string
     */
    public function getHttpStatusCodeDesc()
    {
        return $this->httpStatusCodeDesc;
    }

    /**
     * @param string $httpStatusCodeDesc
     */
    public function setHttpStatusCodeDesc($httpStatusCodeDesc)
    {
        $this->httpStatusCodeDesc = $httpStatusCodeDesc;
    }

    /**
     * @return array
     */
    public function getErrors()
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
    public function getMessages()
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
    public function getEntity()
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