<?php

declare(strict_types=1);

namespace App\DTO;


use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

readonly class reviewDTO
{
    public function __construct(

        public  string $commentaire,
        public  string $note,



    ) {
    }


    public static function fromRequest(StoreReviewRequest | UpdateReviewRequest $request)
    {
        $validatedData = $request->validated();
        return new self(
            commentaire: $validatedData["commentaire"],
            note: $validatedData["note"],

        );
    }
}
