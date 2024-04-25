<?php

namespace App\Repositories;

use App\Models\Offre;
use App\DTO\reviewDTO;
use App\Models\Review;

interface ReviewRepositoryInterface
{
   // Extend with your methods
   public function store(reviewDTO$reviewDTO, Offre $offre);
   public function update(reviewDTO $reviewDTO, Review $review);
}
