<?php


namespace App\Services\Users\Repositories;


use App\Models\User;

class UserRepository
{
    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll(){
        return User::all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createFromArray(array $data) : User {
        return User::create($data);
    }

    /**
     * @param User $user
     * @param $data
     * @return User
     */
    public function updateFromArray(User $user, $data)
    {
        $user->update($data);
        return $user;
    }


    /**
     * @param User $user
     * @return bool|null
     * @throws \Exception
     */
    public function delete(User $user)  {
        return $user->delete();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return User::findOrFail($id);
    }
}
