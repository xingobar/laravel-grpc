<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/greet.proto

namespace Protobuf\Greet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protobuf.greet.GreetResponse</code>
 */
class GreetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protobuf.messages.User user = 1;</code>
     */
    protected $user = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Protobuf\Messages\User $user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Greet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protobuf.messages.User user = 1;</code>
     * @return \Protobuf\Messages\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.protobuf.messages.User user = 1;</code>
     * @param \Protobuf\Messages\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Protobuf\Messages\User::class);
        $this->user = $var;

        return $this;
    }

}

