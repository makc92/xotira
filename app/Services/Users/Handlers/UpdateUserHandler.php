<?php


namespace App\Services\Users\Handlers;


use App\Models\User;
use App\Services\Users\Repositories\UserRepository;

class UpdateUserHandler
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(User $user, array $data) {
        $data['password'] = bcrypt($data['password']);
        return $this->userRepository->updateFromArray($user,$data);
    }
}
