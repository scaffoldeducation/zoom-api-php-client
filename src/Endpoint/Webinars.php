<?php

namespace UDX\Zoom\Endpoint;

use UDX\Zoom\Http\Request;

/**
 * Class Webinars
 * @package UDX\Zoom\Endpoint
 */
class Webinars extends Request {

    /**
     * Webinars constructor.
     * @param $apiKey
     * @param $apiSecret
     */
    public function __construct($apiKey, $apiSecret, $token) {
        parent::__construct($apiKey, $apiSecret, $token);
    }

    /**
     * List
     *
     * @param $userId
     * @param array $query
     * @return array|mixed
     */
    public function list(string $userId, array $query = []) {
        return $this->get("users/{$userId}/webinars", $query);
    }

    /**
     * Create
     *
     * @param $userId
     * @param array $data
     * @return array|mixed
     */
    public function create(string $userId, array $data  = null) {
        return $this->post("users/{$userId}/webinars", $data);
    }

    /**
     * Webinar
     *
     * @param $webinarId
     * @return array|mixed
     */
    public function webinar(string $webinarId) {
        return $this->get("webinars/{$webinarId}");
    }

    /**
     * Remove
     *
     * @param $webinarId
     * @return array|mixed
     */
    public function remove(string $webinarId) {
        return $this->delete("webinars/{$webinarId}");
    }

    /**
     * Update
     *
     * @param $webinarId
     * @param array $data
     * @return array|mixed
     */
    public function update(string $webinarId, array $data = []) {
        return $this->patch("webinars/{$webinarId}", $data);
    }

    /**
     * Status
     *
     * @param $webinarId
     * @param array $data
     * @return mixed
     */
    public function status(string $webinarId, array $data = []) {
        return $this->put("webinars/{$webinarId}/status", $data);
    }

    /**
     * List Registrants
     *
     * @param $webinarId
     * @param array $query
     * @return array|mixed
     */
    public function listRegistrants(string $webinarId, array $query = []) {
        return $this->get("webinars/{$webinarId}/registrants", $query);
    }
}