<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/user.proto

namespace Protobuf\Mypackage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protobuf.mypackage.Users</code>
 */
class Users extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protobuf.messages.User users = 1;</code>
     */
    private $users;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Protobuf\Messages\User>|\Google\Protobuf\Internal\RepeatedField $users
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .protobuf.messages.User users = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated .protobuf.messages.User users = 1;</code>
     * @param array<\Protobuf\Messages\User>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protobuf\Messages\User::class);
        $this->users = $arr;

        return $this;
    }

}

