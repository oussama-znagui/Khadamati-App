<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\DTO\Auth\loginDTO;
use App\DTO\Auth\regesterDTO;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegesterRequest;
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

    public function register(RegesterRequest $request)
    {

        $regesterDTO = regesterDTO::fromRequest($request);
        $this->repository->regester($regesterDTO);
    }

    public function logout()
    {
        $this->repository->logout();
    }
}
