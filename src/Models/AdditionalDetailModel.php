<?php

namespace Kaweb\Phixfly\Models;

class AdditionalDetailModel
{
    /**
     * The question/prompt offered to the reporting user
     *
     * @var string
     */
    protected $label;

    /**
     * The answer
     *
     *
     * @var string
     */
    protected $value;

    /**
     * AdditionalDetailModel constructor.
     * http://api-docs.fixflo.com/?php#resources-additionaldetail
     *
     * @param string $label
     * @param string $value
     */
    public function __construct(string $label = '', string $value = '')
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
}