<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama88 extends Model
{
    use HasFactory;

    protected $table = "agama";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_agama'
    ];
}
