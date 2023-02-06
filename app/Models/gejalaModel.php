<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejalaModel extends Model
{
    protected $table = 'gejala';

    protected $fillable = [
        'gejala_id',
        'gejala',

    ];
    use HasFactory;
}
