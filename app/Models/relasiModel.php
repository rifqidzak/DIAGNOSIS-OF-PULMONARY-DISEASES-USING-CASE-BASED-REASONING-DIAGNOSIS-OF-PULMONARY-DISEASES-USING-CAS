<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relasiModel extends Model
{
    protected $table = 'relasi';

    protected $fillable = [
        'penyakit_id',
        'gejala_id',


    ];
    use HasFactory;
}
