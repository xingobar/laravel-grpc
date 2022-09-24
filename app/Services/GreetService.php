<?php


namespace App\Services;


use Protobuf\Greet\GreetRequest;
use Protobuf\Greet\GreetResponse;
use Protobuf\Greet\GreetServiceInterface;
use Protobuf\Greet\User;
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
    public function greet(GRPC\ContextInterface $ctx, GreetRequest $in): GreetResponse
    {
        $response = new GreetResponse();

        $user = new User();
        $user->setId(100);
        $user->setName('hello world');

        $response->setUser($user);

        return $response;
    }
}