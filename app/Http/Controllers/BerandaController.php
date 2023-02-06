<?php

namespace App\Http\Controllers;

use App\Models\gejalaModel;
use App\Models\logsModel;
use App\Models\penyakitModel;
use App\Models\relasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function viewDiagnosa(){
        $data = gejalaModel::all();
        return view('Beranda.diagnosa',compact('data'));
    }

    public function submit_diagnosa(Request $request){
        // dd($request);
        $diagnosa = [];
        $tbc_rule = [];
        $pneumonia_rule = [];
        $bronkitis_rule = [];
        $asma_rule = [];
        $covid19_rule =[];
        $a_tbc= 0;
        $a_pneumonia= 0;
        $a_bronkitis= 0;
        $a_asma= 0;
        $a_covid19= 0;
        $count_gejala = gejalaModel::all()->count();
        // dd($count_gejala);
            for($i = 1; $i<=$count_gejala; $i++){
                $x= "gejala";
                $z= $x.$i;
                if(isset($_POST[$z])){
                    $diagnosa[] = $_POST[$z];
                }
            }
        // dd($diagnosa);

        $tbc_rule= relasiModel::where('penyakit_id','P01')->get();
        $pneumonia_rule= relasiModel::where('penyakit_id','P02')->get();
        $bronkitis_rule= relasiModel::where('penyakit_id','P03')->get();
        $asma_rule= relasiModel::where('penyakit_id','P04')->get();
        $covid19_rule= relasiModel::where('penyakit_id','P05')->get();
        $tbc2 = count($tbc_rule);
        $pneumonia2 = count($pneumonia_rule);
        $bronkitis2 = count($bronkitis_rule);
        $asma2 = count($asma_rule);
        $covid192 = count($covid19_rule);
        // dd($covid19_rule);
        // dd($tbc_rule);
        // dd(count($diagnosa));
        // dd($tbc_rule);
                                    //Pencarian Nilai a dan pencarian gejala yang sesuai dengan kasus lama
        $temp=0;
        for ($i=0; $i < count($tbc_rule); $i++) {
            for ($j=0; $j < count($diagnosa); $j++) {
                if ($diagnosa[$j] == $tbc_rule[$i]['gejala_id'] ) {
                    $temp++;
                }
            }
        }
        $a_tbc = $temp;
        $sama = $a_tbc-$tbc2;
        $sama2 = $a_tbc-count($diagnosa);
        if($sama == 0 && $sama2 == 0){

            $data2 = penyakitModel::where('penyakit_id','P01')->get();
            // dd($data2);
            $hasil = ($a_tbc/count($tbc_rule))*100;
            return view('Beranda.hasildiagnosa2', compact('hasil', 'data2'));
        }


        $temp=0;
        for ($i=0; $i < count($pneumonia_rule); $i++) {
            for ($j=0; $j < count($diagnosa); $j++) {
                if ($diagnosa[$j] == $pneumonia_rule[$i]['gejala_id'] ) {
                    $temp++;
                }
            }
        } $a_pneumonia = $temp;

        $sama = $a_pneumonia-$pneumonia2;
        $sama2 = $a_pneumonia-count($diagnosa);
        if($sama == 0 && $sama2 == 0){

            $data2 = penyakitModel::where('penyakit_id','P02')->get();
            // dd($data2);
            $hasil = ($a_pneumonia/count($pneumonia_rule))*100;
            return view('Beranda.hasildiagnosa2', compact('hasil', 'data2'));
        }

        $temp=0;
        for ($i=0; $i < count($bronkitis_rule); $i++) {
            for ($j=0; $j < count($diagnosa); $j++) {
                if ($diagnosa[$j] == $bronkitis_rule[$i]['gejala_id'] ) {
                    $temp++;
                }
            }
        }$a_bronkitis = $temp;

        $sama = $a_bronkitis-$bronkitis2;
        $sama2 = $a_bronkitis-count($diagnosa);
        if($sama == 0 && $sama2 == 0){

            $data2 = penyakitModel::where('penyakit_id','P03')->get();
            // dd($data2);
            $hasil = ($a_bronkitis/count($bronkitis_rule))*100;
            return view('Beranda.hasildiagnosa2', compact('hasil', 'data2'));
        }

        $temp=0;
        for ($i=0; $i < count($asma_rule); $i++) {
            for ($j=0; $j < count($diagnosa); $j++) {
                if ($diagnosa[$j] == $asma_rule[$i]['gejala_id'] ) {
                    $temp++;
                }
            }
        }$a_asma = $temp;

        $sama = $a_asma-$asma2;
        $sama2 = $a_asma-count($diagnosa);
        if($sama == 0 && $sama2 == 0){

            $data2 = penyakitModel::where('penyakit_id','P04')->get();
            // dd($data2);
            $hasil = ($a_asma/count($asma_rule))*100;
            return view('Beranda.hasildiagnosa2', compact('hasil', 'data2'));
        }

        $temp=0;
        for ($i=0; $i < count($covid19_rule); $i++) {
            for ($j=0; $j < count($diagnosa); $j++) {
                if ($diagnosa[$j] == $covid19_rule[$i]['gejala_id'] ) {
                    $temp++;
                }
            }
        }$a_covid19 = $temp;

        // dd($a_covid19);
        $sama = $a_covid19-$covid192;
        $sama2 = $a_covid19-count($diagnosa);
        if($sama == 0 && $sama2 == 0){

            $data2 = penyakitModel::where('penyakit_id','P05')->get();
            // dd($data2);

            $hasil = ($a_covid19/count($covid19_rule))*100;
            return view('Beranda.hasildiagnosa2', compact('hasil', 'data2'));
        }


                        //Perhitungan Sorgenfrei
        $b_tbc = count($tbc_rule) - $a_tbc;
        $c_tbc = count($diagnosa) - $a_tbc;
        $tbc_sorgenfrei = (pow($a_tbc,2))/((($a_tbc)+($b_tbc))*(($a_tbc+$c_tbc)));
        // dd($tbc_sorgenfrei);
        // dd($a_tbc);

        $b_pneumonia = count($pneumonia_rule) - $a_pneumonia;
        $c_pneumonia = count($diagnosa) - $a_pneumonia;
        $pneumonia_sorgenfrei = (pow($a_pneumonia,2))/((($a_pneumonia)+($b_pneumonia))*(($a_pneumonia+$c_pneumonia)));
        // dd($pneumonia_sorgenfrei);
        // dd($a_pneumonia);

        $b_bronkitis = count($bronkitis_rule) - $a_bronkitis;
        $c_bronkitis = count($diagnosa) - $a_bronkitis;
        $bronkitis_sorgenfrei = (pow($a_bronkitis,2))/((($a_bronkitis)+($b_bronkitis))*(($a_bronkitis+$c_bronkitis)));
        // dd($bronkitis_sorgenfrei);
        // dd($a_bronkitis);

        $b_asma = count($asma_rule) - $a_asma;
        $c_asma = count($diagnosa) - $a_asma;
        $asma_sorgenfrei = (pow($a_asma,2))/((($a_asma)+($b_asma))*(($a_asma+$c_asma)));
        // dd($asma_sorgenfrei);
        // dd($a_asma);

        $b_covid19 = count($covid19_rule) - $a_covid19;
        $c_covid19 = count($diagnosa) - $a_covid19;
        $covid19_sorgenfrei = (pow($a_covid19,2))/((($a_covid19)+($b_covid19))*(($a_covid19+$c_covid19)));
        // dd($covid19_sorgenfrei);
        // dd($a_covid19);

                        //Pencarian Index Hasil
        $data2 = penyakitModel::all();
        $hasil = [];
        $hasil[] = $tbc_sorgenfrei;
        $hasil[] = $pneumonia_sorgenfrei;
        $hasil[] = $bronkitis_sorgenfrei;
        $hasil[] = $asma_sorgenfrei;
        $hasil[] = $covid19_sorgenfrei;
        $er = max($hasil);
        $temp = 0;
        $index = [];
        for ($i=0; $i < count($hasil) ; $i++) {
            if ($hasil[$i] == $er) {
                $index[] = $i;
            }
        }
        $finish = round($er*100);

                        //Penyimapanan Gejala Kedalam Table Logs
        $t= "";
        for ($i=0; $i < count($diagnosa) ; $i++) {
        if($i==0){
            $t = $t.$diagnosa[$i];
        }else{
            $t = $t.",".$diagnosa[$i];
        }
        }
        // dd($t);
        // dd($data2);
    for($i=0; $i<count($index); $i++){
    logsModel::create([
        'penyakit' => $data2[$index[$i]]['penyakit'],
        'tanggal_hari'=> date("Y-d-m"),
        'gejala' => $t,
        'hasil_similaritas'=> $er
    ]);}
        return view('Beranda.HasilDiagnosa', compact('index','data2','finish'));
}
    public function viewHome(){
        return view('Beranda.home');
    }
}
