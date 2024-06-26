<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'prix',
        'bricole_id',
        'freelancer_id'
    ];

    public function bricole()
    {
        return $this->belongsTo(Bricole::class);
    }
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
    public function reclamation()
    {
        return $this->hasOne(Reclamation::class);
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
