<?php

namespace UDX\Zoom\Endpoint;

use UDX\Zoom\Http\Request;

/**
 * Class Dashboards
 * @package UDX\Zoom\Endpoint
 */
class Dashboards extends Request {

    /**
     * Dashboards constructor.
     * @param $apiKey
     * @param $apiSecret
     */
    public function __construct($apiKey, $apiSecret) {
        parent::__construct($apiKey, $apiSecret);
    }

    /**
     * List meetings
     *
     * @param array $query
     * @return array|mixed
     */
    public function listMeetings(array $query = []) {
        return $this->get("/metrics/meetings", $query);
    }
}