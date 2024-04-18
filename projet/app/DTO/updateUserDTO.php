<?php

declare(strict_types=1);

namespace App\DTO;


use App\Http\Requests\UpdateUserRequest;

readonly class UpdateUserDTO
{
    public function __construct(


        public string $prenom,
        public string $nom,
        public string $sexe,
        public string $adresse,
        public string $tel,
        public string $role,
        public string $email,
        public string $ville_id,



    ) {
    }

    public static function fromRequest(UpdateUserRequest  $request)
    {
        $validatedData = $request->validated();
        return new self(
            prenom: $validatedData["prenom"],
            nom: $validatedData["nom"],
            sexe: $validatedData["sexe"],
            adresse: $validatedData["adresse"],
            tel: $validatedData["tel"],
            role: $validatedData["role"],
            email: $validatedData["email"],
            ville_id: $validatedData["ville_id"],


        );
    }
}
