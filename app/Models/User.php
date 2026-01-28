<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // atribut yang dapat diisi massal
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // atribut yang harus disembunyikan untuk array
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // atribut yang harus diubah tipe datanya
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
