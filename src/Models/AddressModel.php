<?php

namespace Kaweb\Phixfly\Models;

class AddressModel
{
    /**
     * @var string
     */
    protected $addressLineOne;

    /**
     * @var string
     */
    protected $addressLineTwo;

    /**
     * @var string
     */
    protected $town;

    /**
     * @var string
     */
    protected $county;

    /**
     * @var string
     */
    protected $postcode;

    /**
     * @var string
     */
    protected $country;

    /**
     * AddressModel constructor.
     * http://api-docs.fixflo.com/?php#resources-address
     *
     * @param string $addressLineOne
     * @param string $addressLineTwo
     * @param string $town
     * @param string $county
     * @param string $postcode
     * @param string $country
     */
    public function __construct(string $addressLineOne, string $addressLineTwo, string $town, string $county, string $postcode, string $country)
    {
        $this->addressLineOne = $addressLineOne;
        $this->addressLineTwo = $addressLineTwo;
        $this->town = $town;
        $this->county = $county;
        $this->postcode = $postcode;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getAddressLineOne(): string
    {
        return $this->addressLineOne;
    }

    /**
     * @param string $addressLineOne
     */
    public function setAddressLineOne(string $addressLineOne)
    {
        $this->addressLineOne = $addressLineOne;
    }

    /**
     * @return string
     */
    public function getAddressLineTwo(): string
    {
        return $this->addressLineTwo;
    }

    /**
     * @param string $addressLineTwo
     */
    public function setAddressLineTwo(string $addressLineTwo)
    {
        $this->addressLineTwo = $addressLineTwo;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown(string $town)
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * @param string $county
     */
    public function setCounty(string $county)
    {
        $this->county = $county;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode(string $postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}