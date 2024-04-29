<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Models\Client;
use App\DTO\Auth\loginDTO;
use App\Models\Freelancer;
use App\DTO\Auth\regesterDTO;
use App\DTO\updateUserDTO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Repositories\UserRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class UserRepository.
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    // public function __construct(User $model)
    // {
    //     parent::__construct($model);
    // }


    public function Login(loginDTO $request)
    {

        $request = $this->getArr($request);

        if (Auth::attempt($request)) {


            if (Auth::User()->role == 'Client') {

                return abort(redirect()->route('Client.profilePersonel'));
            } else {
                return abort(redirect()->route('Freelancer.profilePersonel'));
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

    public function regester(regesterDTO $regesterDTO)
    {

        if ($regesterDTO->password != $regesterDTO->cpassword) {
            return abort(redirect()->route('register')
                ->with('passwordMessage', 'les deux mot de pass ne sont pas identiques'));
        }
        $user = User::create($this->getArrRegister($regesterDTO));
        if ($regesterDTO->role == 'Client') {
            $client = Client::create([
                'user_id' => $user->id,

            ]);
            auth()->login($user);
            return abort(redirect()->route('Client.profilePersonel'));
        } else {
            $freelancer = Freelancer::create([
                'user_id' => $user->id,
                'profession_id' => 1,
            ]);
        }
        // dd($client);

        dd($regesterDTO);
    }

    private function getArrRegister(regesterDTO $regesterDTO): array
    {
        return [

            'prenom'  => $regesterDTO->prenom,
            'nom'  => $regesterDTO->nom,
            'sexe '  => $regesterDTO->sexe,
            'adresse'  => $regesterDTO->adresse,
            'tel'  => $regesterDTO->tel,
            'role'  => $regesterDTO->role,
            'email'  => $regesterDTO->email,
            'password'  => $regesterDTO->password,
            'ville_id'  => $regesterDTO->ville_id,


        ];
    }


    public function logout()
    {

        Session::flush();
        Auth::logout();

        return abort(Redirect('login'));
    }


    public function update(updateUSerDTO $updateUSerDTO, User $user){
        // $user = User::find($user->id);
        $user->nom = $updateUSerDTO->nom;
        $user->prenom = $updateUSerDTO->prenom;
        $user->sexe = $updateUSerDTO->sexe;
        $user->adresse = $updateUSerDTO->adresse;
        $user->tel = $updateUSerDTO->tel;
        $user->role = $updateUSerDTO->role;
        $user->email = $updateUSerDTO->email;
        $user->ville_id = $updateUSerDTO->ville_id;
        $user->save();
        return abort(redirect('/editProfile')->with('message', 'user updated successfully'));

        
    }
}
