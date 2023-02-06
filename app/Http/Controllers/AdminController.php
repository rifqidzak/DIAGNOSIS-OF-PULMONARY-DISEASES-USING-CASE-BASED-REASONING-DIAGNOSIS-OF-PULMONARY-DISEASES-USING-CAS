<?php

namespace App\Http\Controllers;

use App\Models\gejalaModel;
use App\Models\logsModel;
use App\Models\penyakitModel;
use App\Models\relasiModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function viewLogs(){
        $data = logsModel::all();
        return view('Admin.logs', compact('data'));
    }

    public function viewGejala(){
        $data = gejalaModel::all();
        return view('Admin.listgejala', compact('data'));
    }

    public function viewRelasi(){
        $data = relasiModel::all();
        return view('Admin.listrelasi', compact('data'));
    }

    public function viewPenyakit(){
        $data = penyakitModel::all();
        return view('Admin.listpenyakit', compact('data'));
    }

    public function viewLogin(){
        return view('Admin.login');
    }

    public function postlogin(Request $request){
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        Auth::attempt($credential);
        $n = Auth::attempt($credential);

        if ($n == true) {
            $request->session()->regenerate();
            return redirect()->intended('/logs');
        }
        else{
        return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function getmenerima($id){
        $data = logsModel::where('id',$id)->get();
        $tbc_rule= relasiModel::where('penyakit_id','P01')->get();
        $pneumonia_rule= relasiModel::where('penyakit_id','P02')->get();
        $bronkitis_rule= relasiModel::where('penyakit_id','P03')->get();
        $asma_rule= relasiModel::where('penyakit_id','P04')->get();
        $covid19_rule= relasiModel::where('penyakit_id','P05')->get();
        $temp = [];
        $temp2 = $data[0]['penyakit'];


        // dd($data);
        foreach ($data as $data) {
            $temp = explode(",",$data->gejala);
        }
            // dd($temp);

        // dd($temp2);

                                    // Pengecekan data Pada Gejala
        $temp1 = [];
            if($temp2=='TBC'){
                for ($i=0; $i < count($tbc_rule) ; $i++) {
                $temp1 []= $tbc_rule[$i]['gejala_id'];
                }
                    for ($i=0; $i <count($temp) ; $i++) {
                        if (!in_array($temp[$i],$temp1)) {
                            relasiModel::create([
                            'penyakit_id' => 'P01',
                            'gejala_id' => $temp[$i],
                            ]);
                        }
                    }
                DB::table('logs')->where('id',$id)->delete();
                return redirect()->back();
            }
            elseif($temp2=='Pneumonia'){
                for ($i=0; $i < count($pneumonia_rule) ; $i++) {
                $temp1 []= $pneumonia_rule[$i]['gejala_id'];
                }
                    for ($i=0; $i <count($temp) ; $i++) {
                        if (!in_array($temp[$i],$temp1)) {
                            relasiModel::create([
                            'penyakit_id' => 'P02',
                            'gejala_id' => $temp[$i],
                            ]);
                        }
                    }
                DB::table('logs')->where('id',$id)->delete();
                return redirect()->back();
            }
           elseif($temp2=='Bronkitis'){
                for ($i=0; $i < count($bronkitis_rule) ; $i++) {
                $temp1 []= $bronkitis_rule[$i]['gejala_id'];
                }
                    for ($i=0; $i <count($temp) ; $i++) {
                        if (!in_array($temp[$i],$temp1)) {
                            relasiModel::create([
                            'penyakit_id' => 'P03',
                            'gejala_id' => $temp[$i],
                            ]);
                        }
                    }
                DB::table('logs')->where('id',$id)->delete();
                return redirect()->back();
            }
            elseif($temp2=='Asma'){
                for ($i=0; $i < count($asma_rule) ; $i++) {
                $temp1 []= $asma_rule[$i]['gejala_id'];
                }
                    for ($i=0; $i <count($temp) ; $i++) {
                        if (!in_array($temp[$i],$temp1)) {
                            relasiModel::create([
                            'penyakit_id' => 'P04',
                            'gejala_id' => $temp[$i],
                            ]);
                        }
                    }
                DB::table('logs')->where('id',$id)->delete();
                return redirect()->back();
            }
            elseif($temp2=='COVID-19'){
                for ($i=0; $i < count($covid19_rule) ; $i++) {
                $temp1 []= $covid19_rule[$i]['gejala_id'];
                }
                    for ($i=0; $i <count($temp) ; $i++) {
                        if (!in_array($temp[$i],$temp1)) {
                            relasiModel::create([
                            'penyakit_id' => 'P05',
                            'gejala_id' => $temp[$i],
                            ]);
                        }
                    }
                DB::table('logs')->where('id',$id)->delete();
                return redirect()->back();
            }
    }


}

