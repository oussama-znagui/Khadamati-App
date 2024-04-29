<?php

declare(strict_types=1);

namespace App\DTO;

use App\Http\Requests\StoreBricoleRequest;


readonly class bricoleDTO
{
    public function __construct(

        public  string $titre,
        public  string $budget,
        public  string $priorite,
        public  string $profession_id,
        public  Object  $image,
        public  string  $nde,
        public  string  $description,


    ) {
    }

    public static function fromRequest(StoreBricoleRequest  $request)
    {
        $validatedData = $request->validated();
        return new self(
            titre: $validatedData["titre"],
            budget: $validatedData["budget"],
            priorite: $validatedData["priorite"],
            profession_id: $validatedData["profession_id"],
            image: $validatedData["image"],
            nde: $validatedData["nde"],
            description: $validatedData["description"],

        );
    }
}
