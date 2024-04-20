<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    public function bricole()
    {
        return $this->belongsTo(Bricole::class);
    }
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
}
