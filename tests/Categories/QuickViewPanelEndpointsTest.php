<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelperTest;

class QuickViewPanelEndpointsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var RequestHelperTest
     */
    protected $requestHelper;

    /**
     * QuickViewPanelEndpoint constructor.
     * @param RequestHelperTest $requestHelper
     */
    public function __construct(RequestHelperTest $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-quick-view-panel-endpoints-get-quick-view-panel
     *
     * @return array
     */
    public function getQuickViewPanel()
    {
        return $this->requestHelper->get('/qvp');
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-quick-view-panel-endpoints-qvpcalendareventlist
     *
     * @param int $id
     * @return array
     */
    public function QVPCalendarEventList($id)
    {
        return $this->requestHelper->get('/qvp/calendareventpmtasklist/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-quick-view-panel-endpoints-qvpissuestatussummary
     *
     * @param int $id
     * @return array
     */
    public function QVPIssueStatusSummary($id)
    {
        return $this->requestHelper->get('/qvp/issuestatussummary/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-quick-view-panel-endpoints-qvpissuesummary
     *
     * @param int $id
     * @return array
     */
    public function QVPIssueSummary($id)
    {
        return $this->requestHelper->get('/qvp/issuesummary/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-quick-view-panel-endpoints-qvpkeylabelvalues
     *
     * @param int $id
     * @return array
     */
    public function QVPKeyLabelValues($id)
    {
        return $this->requestHelper->get('/qvp/keylabelvalues/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-quick-view-panel-endpoints-qvpkvpairs
     *
     * @param int $id
     * @return array
     */
    public function QVPKVPairs($id)
    {
        return $this->requestHelper->get('/qvp/kvpairs/' . $id);
    }
}