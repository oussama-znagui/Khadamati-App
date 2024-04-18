<?php

namespace App\Http\Controllers;

use App\DTO\UpdateUserDTO;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct(public UserRepositoryInterface $repository)
    {
    }

    public function update(User $user, UpdateUserRequest $updateUserRequest)
    {
        

        $updateUserDTO = UpdateUserDTO::fromRequest($updateUserRequest);
        $this->repository->update($updateUserDTO, $user);
    }
}
