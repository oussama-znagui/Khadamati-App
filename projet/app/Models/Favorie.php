<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorie extends Model
{

    use HasFactory;
    protected $fillable = [
        'freelancer_id',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
}
