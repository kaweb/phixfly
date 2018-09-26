<?php

namespace Kaweb\Phixfly\Models;

class AgencyModelTestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $agencyName;

    /**
     * @var string
     */
    protected $customDomain;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var bool
     */
    protected $isDeleted;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var int
     */
    protected $featureType;

    /**
     * @var int
     */
    protected $issueTreeRoot;

    /**
     * @var string
     */
    protected $siteBaseUrl;

    /**
     * @var string
     */
    protected $defaultTimeZoneId;

    /**
     * @var string
     */
    protected $locale;

    /**
     * AgencyModel constructor.
     * http://api-docs.fixflo.com/#resources-agency
     *
     * @param string $id
     * @param string $agencyName
     * @param string $customDomain
     * @param string $emailAddress
     * @param string $password
     * @param bool $isDeleted
     * @param \DateTime $created
     * @param int $featureType
     * @param int $issueTreeRoot
     * @param string $siteBaseUrl
     * @param string $defaultTimeZoneId
     * @param string $locale
     */
    public function __construct($id, $agencyName, $customDomain, $emailAddress, $password, $isDeleted, \DateTime $created, $featureType, $issueTreeRoot, $siteBaseUrl, $defaultTimeZoneId, $locale)
    {
        $this->id = $id;
        $this->agencyName = $agencyName;
        $this->customDomain = $customDomain;
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->isDeleted = $isDeleted;
        $this->created = $created;
        $this->featureType = $featureType;
        $this->issueTreeRoot = $issueTreeRoot;
        $this->siteBaseUrl = $siteBaseUrl;
        $this->defaultTimeZoneId = $defaultTimeZoneId;
        $this->locale = $locale;
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
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * @param string $agencyName
     */
    public function setAgencyName($agencyName)
    {
        $this->agencyName = $agencyName;
    }

    /**
     * @return string
     */
    public function getCustomDomain()
    {
        return $this->customDomain;
    }

    /**
     * @param string $customDomain
     */
    public function setCustomDomain($customDomain)
    {
        $this->customDomain = $customDomain;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    /**
     * @return int
     */
    public function getFeatureType()
    {
        return $this->featureType;
    }

    /**
     * @param int $featureType
     */
    public function setFeatureType($featureType)
    {
        $this->featureType = $featureType;
    }

    /**
     * @return int
     */
    public function getIssueTreeRoot()
    {
        return $this->issueTreeRoot;
    }

    /**
     * @param int $issueTreeRoot
     */
    public function setIssueTreeRoot($issueTreeRoot)
    {
        $this->issueTreeRoot = $issueTreeRoot;
    }

    /**
     * @return string
     */
    public function getSiteBaseUrl()
    {
        return $this->siteBaseUrl;
    }

    /**
     * @param string $siteBaseUrl
     */
    public function setSiteBaseUrl($siteBaseUrl)
    {
        $this->siteBaseUrl = $siteBaseUrl;
    }

    /**
     * @return string
     */
    public function getDefaultTimeZoneId()
    {
        return $this->defaultTimeZoneId;
    }

    /**
     * @param string $defaultTimeZoneId
     */
    public function setDefaultTimeZoneId($defaultTimeZoneId)
    {
        $this->defaultTimeZoneId = $defaultTimeZoneId;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
}