<?php

namespace App\Repositories;

use App\Models\Offre;
use App\DTO\reclamationDTO;

interface ReclamationRepositoryInterface
{
   // Extend with your methods
   public function store(reclamationDTO$reclamatioDto, Offre $offre);
   public function getReclamations();
}
