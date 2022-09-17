<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/greet.proto

namespace Poyu\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>poyu.grpc.ExampleRequest</code>
 */
class ExampleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 a = 1;</code>
     */
    protected $a = 0;
    /**
     * Generated from protobuf field <code>uint64 b = 2;</code>
     */
    protected $b = 0;
    /**
     * Generated from protobuf field <code>string op = 3;</code>
     */
    protected $op = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $a
     *     @type int|string $b
     *     @type string $op
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Greet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 a = 1;</code>
     * @return int|string
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Generated from protobuf field <code>uint64 a = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setA($var)
    {
        GPBUtil::checkUint64($var);
        $this->a = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 b = 2;</code>
     * @return int|string
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Generated from protobuf field <code>uint64 b = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setB($var)
    {
        GPBUtil::checkUint64($var);
        $this->b = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string op = 3;</code>
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>string op = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, True);
        $this->op = $var;

        return $this;
    }

}

