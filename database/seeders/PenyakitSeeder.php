<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penyakit')->insert([
        	'penyakit_id' => 'P01',
        	'penyakit' => 'TBC'
        ]);

        DB::table('penyakit')->insert([
        	'penyakit_id' => 'P02',
        	'penyakit' => 'Pneumonia'
        ]);

        DB::table('penyakit')->insert([
        	'penyakit_id' => 'P03',
        	'penyakit' => 'Bronkitis'
        ]);

        DB::table('penyakit')->insert([
        	'penyakit_id' => 'P04',
        	'penyakit' => 'Asma'
        ]);

        DB::table('penyakit')->insert([
        	'penyakit_id' => 'P05',
        	'penyakit' => 'COVID-19'
        ]);
    }
}
