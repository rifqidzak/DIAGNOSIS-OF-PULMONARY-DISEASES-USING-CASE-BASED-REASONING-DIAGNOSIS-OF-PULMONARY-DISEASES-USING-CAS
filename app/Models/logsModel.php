<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logsModel extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'penyakit',
        'tanggal_hari',
        'gejala',
        'hasil_similaritas',
    ];
    use HasFactory;
}
