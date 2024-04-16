<?php

declare(strict_types=1);

namespace App\DTO\Auth;

use App\Http\Requests\loginRequest;


readonly class loginDTO
{
    public function __construct(

        public  string $email,
        public  string $password,



    ) {
    }

    public static function fromRequest(loginRequest  $request)
    {
        $validatedData = $request->validated();
        return new self(
            email: $validatedData["email"],
            password: $validatedData["password"],


        );
    }
}
