<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Users\UserService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->userService->createUser($request->all());
        flash('User was created')->success();
        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $this->userService->updateUser($user, $request->all());
        flash('User was updated')->success();
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $this->userService->deleteUser($user);
        flash('User was deleted')->success();
        return redirect()->route('admin.users.index');
    }
}
