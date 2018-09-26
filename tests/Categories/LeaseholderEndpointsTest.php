<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;
use Kaweb\Phixfly\Models\LeaseholderModel;

class LeaseholderEndpointsTest
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * LeaseholderEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholder-endpoints-save-leaseholder
     *
     * @param LeaseholderModel $leaseholder
     * @return array
     */
    public function saveLeaseholder(LeaseholderModel $leaseholder)
    {
        return $this->requestHelper->post('/leaseholder', $leaseholder->toArray());
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholder-endpoints-get-leaseholder
     *
     * @param string $leaseholderId
     * @param string $emailAddress
     * @param string $externalLeaseholderRef
     * @return array
     */
    public function getLeaseholder($leaseholderId, $emailAddress, $externalLeaseholderRef)
    {
        return $this->requestHelper->get('/leaseholder/' . $leaseholderId, [
            'EmailAddress' => $emailAddress,
            'ExternalLeaseholderRef' => $externalLeaseholderRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholder-endpoints-get-leaseholders
     *
     * @param int $pg
     * @param string $keyword
     * @param \DateTime $updatedSince
     * @return array
     */
    public function getLeaseholders($pg, $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('/leaseholders', [
            'pg' => $pg,
            'Keyword' => $keyword,
            'UpdatedSince' => $updatedSince->getTimestamp()
        ]);
    }
}