<?php


namespace App\Services;


use Protobuf\Messages\User;
use Protobuf\Mypackage\UserRequest;
use Protobuf\Mypackage\UserServiceInterface;
use Protobuf\Mypackage\UsersResponse;
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
        $user->setId(102);
        $user->setName('test');
        $user->setCreatedAt(now()->format('Y-m-d H:i:s'));
        $user->setUpdatedAt(now()->format('Y-m-d H:i:s'));

        return $user;
    }

    public function getUsers( GRPC\ContextInterface $ctx, UserRequest $in): UsersResponse
    {
        $usersResponse = new UsersResponse();
        $users = [];

        foreach(range(1, 10 ) as $index) {
            $user = new User();
            $user->setEmail('test@gmail.com');
            $user->setId($index);
            $user->setName('test');
            $user->setCreatedAt(now()->format('Y-m-d H:i:s'));
            $user->setUpdatedAt(now()->format('Y-m-d H:i:s'));

            $users[] =  $user;
        }

        $usersResponse->setUsers($users);

        return $usersResponse;
    }
}