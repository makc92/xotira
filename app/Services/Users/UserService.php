<?php


namespace App\Services\Users;


use App\Models\User;
use App\Services\Users\Handlers\CreateUserHandler;
use App\Services\Users\Handlers\UpdateUserHandler;
use App\Services\Users\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var CreateUserHandler
     */
    private $createUserHandler;
    /**
     * @var UpdateUserHandler
     */
    private $updateUserHandler;

    public function __construct(UserRepository $userRepository, CreateUserHandler $createUserHandler, UpdateUserHandler $updateUserHandler)
    {
        $this->userRepository = $userRepository;
        $this->createUserHandler = $createUserHandler;
        $this->updateUserHandler = $updateUserHandler;
    }

    /**
     * @return \App\Models\User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->userRepository->getAll();
    }

    public function createUser($data)
    {
        return $this->createUserHandler->handle($data);
    }

    public function showUser($id)
    {
        return $this->userRepository->find($id);
    }

    public function updateUser(User $user, $data)
    {
        return $this->updateUserHandler->handle($user, $data);
    }

    public function deleteUser(User $user)
    {
        return $this->userRepository->delete($user);
    }
}
