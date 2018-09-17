<?php

namespace Kaweb\Phixfly\Models;

class AddressModel implements ModelInterface
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
    public function __construct($addressLineOne, $addressLineTwo, $town, $county, $postcode, $country)
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
    public function getAddressLineOne()
    {
        return $this->addressLineOne;
    }

    /**
     * @param string $addressLineOne
     */
    public function setAddressLineOne($addressLineOne)
    {
        $this->addressLineOne = $addressLineOne;
    }

    /**
     * @return string
     */
    public function getAddressLineTwo()
    {
        return $this->addressLineTwo;
    }

    /**
     * @param string $addressLineTwo
     */
    public function setAddressLineTwo($addressLineTwo)
    {
        $this->addressLineTwo = $addressLineTwo;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param string $county
     */
    public function setCounty($county)
    {
        $this->county = $county;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * This function will allow us to get the object's protected variables as an array.
     *
     * @return array
     */
    function toArray()
    {
        return [
            'addressLineOne' => $this->addressLineOne,
            'addressLineTwo' => $this->addressLineTwo,
            'town' => $this->town,
            'county' => $this->county,
            'postcode' => $this->postcode,
            'country' => $this->country,
        ];
    }
}