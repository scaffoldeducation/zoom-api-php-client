<?php

namespace UDX\Zoom\Endpoint;

use UDX\Zoom\Http\Request;

/**
 * Class Reports
 * @package UDX\Zoom\Endpoint
 */
class Reports extends Request {

    /**
     * Meetings constructor.
     * @param $apiKey
     * @param $apiSecret
     */
    public function __construct($apiKey, $apiSecret, $token) {
        parent::__construct($apiKey, $apiSecret, $token);
    }

    /**
     * Meeting Participants
     *
     * @param $meetingUUID
     * @param array $query
     * @return array|mixed
     */
    public function meetingParticipants(string $meetingUUID, array $query = []) {
        return $this->get("report/meetings/{$meetingUUID}/participants", $query);
    }

}