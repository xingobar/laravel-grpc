<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/chat.proto

namespace GPBMetadata\Src;

class Chat
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
|
src/chat.protochat"
Message
body (	29
ChatService*
SayHello.chat.Message.chat.Message" BZ./chatbproto3'
        , true);

        static::$is_initialized = true;
    }
}

