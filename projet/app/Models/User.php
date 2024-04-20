<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notification;



class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use Sluggable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prenom',
        'nom',
        'sexe',
        'adresse',
        'tel',
        'role',
        'email',
        'password',
        'ville_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'email',
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function clients()
    {
        return $this->HasMany(Client::class);
    }
    public function freelancers()
    {
        return $this->HasMany(Freelancer::class);
    }

    public function Ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function routeNotificationForVonage(Notification $notification): string
    {
        return $this->tel;
    }
}
