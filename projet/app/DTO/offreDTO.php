<?php

declare(strict_types=1);

namespace App\DTO;


use App\Http\Requests\StoreOffreRequest;
use App\Http\Requests\UpdateOffreRequest;

readonly class offreDTO
{
    public function __construct(

        public  string $message,
        public  string $prix,



    ) {
    }


    public static function fromRequest(StoreOffreRequest | UpdateOffreRequest $request)
    {
        $validatedData = $request->validated();
        return new self(
            message: $validatedData["message"],
            prix: $validatedData["prix"],

        );
    }
}
