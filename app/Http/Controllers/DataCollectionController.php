<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Datacollection;
class DataCollectionController extends Controller
{
    public function index(){
         return view('datacollection');
     }
    
    public function store(Request $request){
        $request->validate([
            'namalengkap' => 'required',
            'tgllahir' => 'required',
            'email' => 'required',
            'nomortelp' => 'required',
            'jeniskelamin' => 'required',
            'provinsi' => 'required',
            'kotakabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'pekerjaan' => 'required',
            'sosialmedia' => 'required',
            'pengeluaranperbulan' => 'required',
        ]);

        $datacollection = new Datacollection;
        $datacollection->namalengkap = $request->namalengkap;
        $datacollection->tgllahir  = $request->tgllahir;
        $datacollection->email  = $request->email;
        $datacollection->nomortelp  = $request->nomortelp;
        $datacollection->jeniskelamin  = $request->jeniskelamin;
        $datacollection->provinsi  = $request->provinsi;
        $datacollection->kotakabupaten  = $request->kotakabupaten;
        $datacollection->kecamatan  = $request->kecamatan;
        $datacollection->kelurahan  = $request->kelurahan;
        $datacollection->pekerjaan  = $request->pekerjaan;
        $datacollection->sosialmedia  = implode(",", $request->sosialmedia);
        $datacollection->pengeluaranperbulan  = $request->pengeluaranperbulan;
        $datacollection->save();
        return redirect('datacollection/success');
    }
}