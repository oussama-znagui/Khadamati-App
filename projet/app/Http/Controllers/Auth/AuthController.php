<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\DTO\Auth\loginDTO;

use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;

class AuthController extends Controller
{
    public function __construct(public UserRepositoryInterface $repository)
    {
    }
    public function login(loginRequest $request)
    {
        $loginDTO = LoginDTO::fromRequest($request);
        $this->repository->login($loginDTO);
    }
}
