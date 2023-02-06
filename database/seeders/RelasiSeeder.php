<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relasi')->insert([
        	'gejala_id' => 'G01',
        	'penyakit_id' => 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G01',
        	'penyakit_id' => 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G01',
        	'penyakit_id' => 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G01',
        	'penyakit_id' => 'P05'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G02',
        	'penyakit_id' => 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G02',
        	'penyakit_id' => 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G02',
        	'penyakit_id' => 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G02',
        	'penyakit_id' => 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G02',
        	'penyakit_id' => 'P05'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G03',
        	'penyakit_id' => 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G03',
        	'penyakit_id' => 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G03',
        	'penyakit_id' => 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G03',
        	'penyakit_id'=> 'P05'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G04',
        	'penyakit_id'=> 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G05',
        	'penyakit_id'=> 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G05',
        	'penyakit_id'=> 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G06',
        	'penyakit_id'=> 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G07',
        	'penyakit_id'=> 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G07',
        	'penyakit_id'=> 'P05'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G08',
        	'penyakit_id'=> 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G08',
        	'penyakit_id'=> 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G08',
        	'penyakit_id'=> 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G08',
        	'penyakit_id'=> 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G08',
        	'penyakit_id'=> 'P05'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G09',
        	'penyakit_id'=> 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G10',
        	'penyakit_id'=> 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G11',
        	'penyakit_id'=> 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G12',
        	'penyakit_id'=> 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G13',
        	'penyakit_id'=> 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G12',
        	'penyakit_id'=> 'P05'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G14',
        	'penyakit_id'=> 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G15',
        	'penyakit_id'=> 'P01'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G14',
        	'penyakit_id'=> 'P03'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G16',
        	'penyakit_id'=> 'P02'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G17',
        	'penyakit_id'=> 'P03'
        ]);


        DB::table('relasi')->insert([
        	'gejala_id' => 'G18',
        	'penyakit_id'=> 'P04'
        ]);

        DB::table('relasi')->insert([
        	'gejala_id' => 'G04',
        	'penyakit_id'=> 'P04'
        ]);
    }
}
