<?php


namespace App\Services;


use Google\Protobuf\GPBEmpty;
use Protobuf\Greet\GreetRequest;
use Protobuf\Greet\GreetResponse;
use Protobuf\Greet\GreetServiceInterface;
use Spiral\GRPC;

class GreetService implements GreetServiceInterface
{

    /**
     * @param GRPC\ContextInterface $ctx
     * @param GreetRequest $in
     * @return GreetResponse
     *
     * @throws GRPC\Exception\InvokeException
     */
    public function greet(GRPC\ContextInterface $ctx, GPBEmpty $in): GreetResponse
    {
        $response = new GreetResponse();

        $user = new \Protobuf\Messages\User();
        $user->setId(100);
        $user->setName('hello world');

        $response->setUser($user);

        return $response;
    }
}