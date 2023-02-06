<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakitModel extends Model
{
    protected $table = 'penyakit';

    protected $fillable = [
        'penyakit_id',
        'penyakit',

    ];
    use HasFactory;
}
