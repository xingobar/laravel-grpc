<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: src/user.proto

namespace Protobuf\Mypackage;

use Spiral\GRPC;

interface UserServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "protobuf.mypackage.UserService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param UserRequest $in
    * @return User
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getUser(GRPC\ContextInterface $ctx, UserRequest $in): User;
}