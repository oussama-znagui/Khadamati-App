<?php

namespace App\Repositories;

use App\DTO\bricoleDTO;
interface BricoleRepositoryInterface

{
   // Extend with your methods
   public function store(bricoleDTO $data);
   public function index();
}
