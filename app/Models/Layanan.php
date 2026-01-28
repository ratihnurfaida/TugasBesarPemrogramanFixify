<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = ['nama', 'layanan', 'pesan', 'no_telepon', 'jumlah_pesanan'];
}
