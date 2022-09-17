<?php


namespace App\Services;


use Mypackage\User;
use Mypackage\UserRequest;
use Mypackage\UserServiceInterface;
use Spiral\GRPC;

class UserService implements UserServiceInterface
{

    /**
     * @param GRPC\ContextInterface $ctx
     * @param UserRequest $in
     * @return User
     *
     * @throws GRPC\Exception\InvokeException
     */
    public function getUser(GRPC\ContextInterface $ctx, UserRequest $in): User
    {
        $user = new User();
        $user->setEmail('test@gmail.com');
        $user->setId(100);
        $user->setName('test');
        $user->setCreatedAt(now()->format('Y-m-d H:i:s'));
        $user->setUpdatedAt(now()->format('Y-m-d H:i:s'));

        return $user;
    }
}