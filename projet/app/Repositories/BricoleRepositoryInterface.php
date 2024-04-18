<?php

namespace App\Repositories;

use App\DTO\bricoleDTO;
use App\Models\Bricole;

interface BricoleRepositoryInterface

{
   // Extend with your methods
   public function store(bricoleDTO $data);
   public function index();
   public function show(Bricole $bricole);
}
