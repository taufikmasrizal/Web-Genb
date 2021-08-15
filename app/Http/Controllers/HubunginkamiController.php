<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hubunginkami;
class HubunginkamiController extends Controller
{
    public function index(){
        $batas = 4;
        $hubunginkami = Hubunginkami::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($hubunginkami->currentPage() - 1);
        return view('admin.saran.index', compact('hubunginkami', 'no'));
     }
    public function utama()
    {
        return view('index');
    }
    public function store(Request $request){
        $hubunginkami = new Hubunginkami;
        $hubunginkami->nama     = $request->nama;
        $hubunginkami->email    = $request->email;
        $hubunginkami->nomor_telp = $request->nomor_telp;
        $hubunginkami->pesan    = $request->pesan;
        $hubunginkami->save();
        return redirect('/');
    }
    public function search(Request $request){
        $batas = 5;
        $cari = $request->nama;
        $data_saran = Hubunginkami::where('nama','like',"%".$cari."%") -> paginate($batas);
        $no = $batas * ($data_saran->currentPage() - 1);
        return view('saran.search', compact('data_saran','no','cari'));
    }
    public function destroy($id){
        $hubunginkami = Hubunginkami::find($id);
        $hubunginkami->delete();
        return redirect('index');
    }
}
