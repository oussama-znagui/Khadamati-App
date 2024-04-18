<?php

namespace App\Repositories;

use App\DTO\Auth\loginDTO;
use App\DTO\Auth\regesterDTO;
use App\DTO\updateUserDTO;
use App\Models\User;

interface UserRepositoryInterface
{
   public function Login(LoginDTO $request);
   public function regester(regesterDTO $regesterDTO);
   public function logout();

    public function update(updateUSerDTO $updateUSerDTO, User $user);
}
