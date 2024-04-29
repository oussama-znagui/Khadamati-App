<?php

namespace App\Http\Controllers;

use App\DTO\UpdateUserDTO;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Bricole;
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

    public function show(User $user){
        $user = User::find($user->id);
        if($user->role == 'Client'){
            $bricoleCount = Bricole::where('client_id', $user->clients()->first->id)->count();
            

        }
        return view('profileUser',[
            'user' => $user,
        ]);
    }
}
