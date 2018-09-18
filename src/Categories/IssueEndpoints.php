<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;
use Kaweb\Phixfly\Models\IssueModel;

class IssueEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * IssueEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-issue
     *
     * @param string $id
     * @return array
     */
    public function getIssue($id)
    {
        return $this->requestHelper->get('/issue/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-issue-report
     *
     * @param string $id
     * @return array
     */
    public function getIssueReport($id)
    {
        return $this->requestHelper->get('/issue/' . $id . '/report');
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-find-issues
     *
     * @param int $page
     * @param \DateTime $createdSince
     * @param \DateTime $createdBefore
     * @param string $status
     * @param bool $hasExternalPropertyRef
     * @return array
     */
    public function findIssues($page, \DateTime $createdSince, \DateTime $createdBefore, $status, $hasExternalPropertyRef)
    {
        return $this->requestHelper->get('/issues', [
            'page' => $page,
            'CreatedSince' => $createdSince->getTimestamp(),
            'CreatedBefore' => $createdBefore->getTimestamp(),
            'Status' => $status,
            'HasExternalPropertyRef' => $hasExternalPropertyRef
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-jobawarded-issues
     *
     * @param int $page
     * @return array
     */
    public function getJobAwardedIssues($page)
    {
        return $this->requestHelper->get('/issues/jobawarded', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-jobcompleted-issues
     *
     * @param int $page
     * @return array
     */
    public function getJobCompletedIssues($page)
    {
        return $this->requestHelper->get('/issues/jobcompleted', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-closed-issues
     *
     * @param int $page
     * @return array
     */
    public function getClosedIssues($page)
    {
        return $this->requestHelper->get('/issues/closed', [
            'page' => $page
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-get-property-issues
     *
     * @param int $id
     * @param int $pg
     * @return array
     */
    public function getPropertyIssues($id, $pg)
    {
        return $this->requestHelper->get('/property/' . $id . '/issues', [
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-endpoints-saveissue
     *
     * @param IssueModel $issue
     * @return array
     */
    public function saveIssue(IssueModel $issue)
    {
        return $this->requestHelper->get('/Issue', $issue->toArray());
    }
}