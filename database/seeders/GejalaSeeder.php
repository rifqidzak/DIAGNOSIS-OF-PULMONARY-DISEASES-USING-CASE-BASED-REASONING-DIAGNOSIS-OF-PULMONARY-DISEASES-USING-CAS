<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gejala')->insert([
        	'gejala_id' => 'G01',
        	'gejala' => 'Demam'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G02',
        	'gejala' => 'Batuk'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G03',
        	'gejala' => 'Sesak Nafas'

        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G04',
        	'gejala' => 'Hidung Tersumbat'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G05',
        	'gejala' => 'Berkeringat Pada Malam Hari'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G06',
        	'gejala' => 'Penurunan Berat Badan'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G07',
        	'gejala' => 'Nyeri Tenggorokan'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G08',
        	'gejala' => 'Nyeri Dada Jika Batuk'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G09',
        	'gejala' => 'Riwayat Alergi'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G10',
        	'gejala' => 'Penurunan Nafsu Makan'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G11',
        	'gejala' => 'Menggigil'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G12',
        	'gejala' => 'Pilek'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G13',
        	'gejala' => 'Mengalami Flu'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G14',
        	'gejala' => 'Sakit Kepala'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G15',
        	'gejala' => 'Batuk Berdarah'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G16',
        	'gejala' => 'Nyeri Otot'
        ]);

        DB::table('gejala')->insert([
        	'gejala_id' => 'G17',
        	'gejala' => 'Mudah Lelah'
        ]);


        DB::table('gejala')->insert([
        	'gejala_id' => 'G18',
        	'gejala' => 'Mengalami Perasaan Gelisah'
        ]);

    }
}
