<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;
use Kaweb\FixfloClient\Models\LeaseholderModel;

class LeaseholderEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * LeaseholderEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
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
        return $this->requestHelper->post('/leaseholder', [
            'Leaseholder' => $leaseholder
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-leaseholder-endpoints-get-leaseholder
     *
     * @param string $leaseholderId
     * @param string $emailAddress
     * @param string $externalLeaseholderRef
     * @return array
     */
    public function getLeaseholder(string $leaseholderId, string $emailAddress, string $externalLeaseholderRef)
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
    public function getLeaseholders(int $pg, string $keyword, \DateTime $updatedSince)
    {
        return $this->requestHelper->get('/leaseholders', [
            'pg' => $pg,
            'Keyword' => $keyword,
            'UpdatedSince' => $updatedSince
        ]);
    }
}