<?php


namespace App\Services\Users\Handlers;


use App\Services\Users\Repositories\UserRepository;

class CreateUserHandler
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        return $this->userRepository->createFromArray($data);
    }
}
