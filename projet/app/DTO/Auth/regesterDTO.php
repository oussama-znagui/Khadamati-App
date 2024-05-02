<?php

declare(strict_types=1);

namespace App\DTO\Auth;


use App\Http\Requests\RegesterRequest;

readonly class regesterDTO
{
    public function __construct(

       
       public string $prenom,
       public string $nom,
       public string $sexe,
       public string $adresse,
       public string $tel,
       public string $role,
       public string $email,
       public string $password,
       public string $cpassword,
       public string $ville_id,
    public string $profession_id



    ) {
    }

    public static function fromRequest(RegesterRequest  $request)
    {
        $validatedData = $request->validated();
        if($request->role == 'Freelancer'){
            return new self(
                prenom: $validatedData["prenom"],
                nom: $validatedData["nom"],
                sexe: $validatedData["sexe"],
                adresse: $validatedData["adresse"],
                tel: $validatedData["tel"],
                role: $validatedData["role"],
                email: $validatedData["email"],
                password: $validatedData["password"],
                cpassword: $validatedData["cpassword"],
                ville_id: $validatedData["ville_id"],
                profession_id: $validatedData["profession_id"],


            );

        }
        return new self(
            prenom: $validatedData["prenom"],
            nom: $validatedData["nom"],
            sexe: $validatedData["sexe"],
            adresse: $validatedData["adresse"],
            tel: $validatedData["tel"],
            role: $validatedData["role"],
            email: $validatedData["email"],
            password: $validatedData["password"],
            cpassword: $validatedData["cpassword"],
            ville_id: $validatedData["ville_id"],


        );
    }
}

