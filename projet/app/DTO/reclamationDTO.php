<?php

declare(strict_types=1);

namespace App\DTO;


use App\Http\Requests\StoreReclamationRequest;


readonly class reclamationDTO
{
    public function __construct(

        public  string $titre,
        public  string $description,
      


    ) {
    }
    

    public static function fromRequest(StoreReclamationRequest  $request)
    {
        $validatedData = $request->validated();
        return new self(
            titre: $validatedData["titre"],
            description: $validatedData["description"],

        );
    }
}
