<?php

namespace App\Repositories\Eloquent;

use App\Models\User;

use App\DTO\Auth\loginDTO;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }


    public function Login(loginDTO $request)
    {

        $request = $this->getArr($request);

        if (Auth::attempt($request)) {


            if (Auth::User()->role == 'Client') {
             
                return abort(redirect()->route('Client.profilePersonel'));
                
            } else {
                dd('Freelancer');
            };
        };

        return abort(to_route('Auth.login')->withErrors([
            'error' => "Email or password invalide"
        ])->onlyInput('email'));
        // return view('welcome');
    }

    private function getArr(loginDTO $loginDTO): array
    {
        return [
            "email" => $loginDTO->email,
            'password'  => $loginDTO->password,


        ];
    }
}
