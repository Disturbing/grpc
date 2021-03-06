<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/payloads.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>grpc.testing.SimpleProtoParams</code>
 */
class SimpleProtoParams extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 req_size = 1;</code>
     */
    private $req_size = 0;
    /**
     * <code>int32 resp_size = 2;</code>
     */
    private $resp_size = 0;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Payloads::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 req_size = 1;</code>
     */
    public function getReqSize()
    {
        return $this->req_size;
    }

    /**
     * <code>int32 req_size = 1;</code>
     */
    public function setReqSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->req_size = $var;
    }

    /**
     * <code>int32 resp_size = 2;</code>
     */
    public function getRespSize()
    {
        return $this->resp_size;
    }

    /**
     * <code>int32 resp_size = 2;</code>
     */
    public function setRespSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->resp_size = $var;
    }

}

