<?php

namespace App\Repositories;

use App\DTO\Auth\loginDTO;

interface UserRepositoryInterface
{
   public function Login(LoginDTO $request);
   
}
