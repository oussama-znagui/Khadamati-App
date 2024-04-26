<?php

namespace App\Repositories;

use App\DTO\offreDTO;
use App\Models\Offre;
use App\Models\Bricole;

interface OffreRepositoryInterface
{
   // Extend with your methods
   public function update(Offre $offre);
   public function store(offreDTO $offreDTO, Bricole $bricole);
}
