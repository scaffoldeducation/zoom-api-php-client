<?php

namespace UDX\Zoom;
use Exception;

class Zoom {

    /**
     * @var null
     */
    private $apiKey = null;

    /**
     * @var null
     */
    private $apiSecret = null;

    /**
     * @var null
     */
    private $token = null;

    /**
     * Zoom constructor.
     * @param $apiKey
     * @param $apiSecret
     */
    public function __construct( $apiKey, $apiSecret, $token = null) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->token = $token;
    }

    /**
     * __call
     *
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call( $method, $args ) {
        return $this->make( $method );
    }

    /**
     * __get
     *
     * @param $name
     * @return mixed
     */
    public function __get( $name ) {
        return $this->make( $name );
    }
    /**
     * Make
     *
     * @param $resource
     * @return mixed
     * @throws Exception
     */
    public function make( $resource ) {
        $class = 'UDX\\Zoom\\Endpoint\\' . ucfirst(strtolower($resource));
        if (class_exists($class)) {
            return new $class( $this->apiKey, $this->apiSecret, $this->token );
        }

        throw new Exception('Wrong method');
    }
}