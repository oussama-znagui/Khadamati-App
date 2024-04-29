<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'profession_id',
    ];

    public function offres()
    {
        return $this->HasMany(Offre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
