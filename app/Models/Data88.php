<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data88 extends Model
{
    use HasFactory;

    protected $table = "detail_data";
    protected $primaryKey = "id";
    protected $fillable = [
        'alamat', 'users_id', 'tempat_lahir', 'tanggal_lahir', 'agama_id', 'foto_ktp', 'umur'
    ];
}
