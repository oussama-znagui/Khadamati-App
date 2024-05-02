<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Bricole extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'titre',
        'budget',
        'priorite',
        'profession_id',
        'images',
        'nde',
        'description',
        'client_id',
        'image',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'titre',
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    // public function getDataAttribute(): string
    // {
    //     return $this->id . ' ' . $this->title . ' ' . $this->created_at;
    // }

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
    public function offres()
    {
        return $this->HasMany(Offre::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
