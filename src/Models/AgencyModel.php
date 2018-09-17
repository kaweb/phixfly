<?php

namespace Kaweb\Phixfly\Models;

class AgencyModel
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
    public function __construct(string $id, string $agencyName, string $customDomain, string $emailAddress, string $password, bool $isDeleted, \DateTime $created, int $featureType, int $issueTreeRoot, string $siteBaseUrl, string $defaultTimeZoneId, string $locale)
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
    public function getAgencyName(): string
    {
        return $this->agencyName;
    }

    /**
     * @param string $agencyName
     */
    public function setAgencyName(string $agencyName)
    {
        $this->agencyName = $agencyName;
    }

    /**
     * @return string
     */
    public function getCustomDomain(): string
    {
        return $this->customDomain;
    }

    /**
     * @param string $customDomain
     */
    public function setCustomDomain(string $customDomain)
    {
        $this->customDomain = $customDomain;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(bool $isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
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
    public function getFeatureType(): int
    {
        return $this->featureType;
    }

    /**
     * @param int $featureType
     */
    public function setFeatureType(int $featureType)
    {
        $this->featureType = $featureType;
    }

    /**
     * @return int
     */
    public function getIssueTreeRoot(): int
    {
        return $this->issueTreeRoot;
    }

    /**
     * @param int $issueTreeRoot
     */
    public function setIssueTreeRoot(int $issueTreeRoot)
    {
        $this->issueTreeRoot = $issueTreeRoot;
    }

    /**
     * @return string
     */
    public function getSiteBaseUrl(): string
    {
        return $this->siteBaseUrl;
    }

    /**
     * @param string $siteBaseUrl
     */
    public function setSiteBaseUrl(string $siteBaseUrl)
    {
        $this->siteBaseUrl = $siteBaseUrl;
    }

    /**
     * @return string
     */
    public function getDefaultTimeZoneId(): string
    {
        return $this->defaultTimeZoneId;
    }

    /**
     * @param string $defaultTimeZoneId
     */
    public function setDefaultTimeZoneId(string $defaultTimeZoneId)
    {
        $this->defaultTimeZoneId = $defaultTimeZoneId;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
        $this->locale = $locale;
    }
}