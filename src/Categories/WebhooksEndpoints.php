<?php

namespace Kaweb\Phixfly\Categories;


use Kaweb\Phixfly\Helpers\RequestHelper;

class WebhooksEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * WebhooksEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-webhooks-list-webhooks
     *
     * @return array
     */
    public function listWebhooks()
    {
        return $this->requestHelper->get('/webhooks/');
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-webhooks-webhook-activity
     *
     * @param string $id
     * @param bool $failedOnly
     * @param int $pg
     * @return array
     */
    public function webhookActivity($id, $failedOnly, $pg)
    {
        return $this->requestHelper->get('/webhook/activity', [
            'id' => $id,
            'failedonly' => $failedOnly,
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-webhooks-subscribe-webhook
     * When using this class I recommend using the EventModel so that you're passing
     * the correct text to their API.
     *
     * @param string $targetUrl
     * @param string $event
     * @return array
     */
    public function subscribeWebhook($targetUrl, $event)
    {
        return $this->requestHelper->post('/webhook/subscribe', [
            'TargetUrl' => $targetUrl,
            'Event' => $event
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-webhooks-unsubscribe-webhook
     *
     * @param string $id
     * @return array
     */
    public function unsubscribeWebhook($id)
    {
        return $this->requestHelper->delete('/webhook/unsubscribe', [
            'id' => $id
        ]);
    }
}