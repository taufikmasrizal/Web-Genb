<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hubunginkami;
use App\Mail\SendEmailGenb;
use Illuminate\Support\Facades\Mail;
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
    public function create(array $data){
        $hubunginkami = Hubunginkami::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'nomor_telp' => $data['nomor_telp'],
            'pesan' => $data['pesan'],
        ]);

        Mail::to($hubunginkami->email)->send(new SendMail($hubunginkami->nama));
        return $hubunginkami;
    }
    public function store(Request $request){
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "sales@broadencreative.com";
        $to = "sales@broadencreative.com";
        $subject = "Pesan baru dari " . $request->nama;
        $message = "Nama : " . $request->nama . "\nEmail : " . $request->email ."\nNomor Telepon : " . $request->nomor_telp . "\n\nPesan : \n" . $request->pesan;
        $headers = "From: " . $request->email;
        mail($to,$subject,$message, $headers);
        
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "sales@broadencreative.com";
        $to = $request->email;
        $subject = "Pesan telah diterima | GenB Creative";
        $message = "Hi " . $request->nama . ",\n\nTerima kasih sudah menghubungi kami melalui website GenB Creative. Kami akan menghubungi anda dalam waktu secepatnya.\n\nPesan : \n" . $request->pesan . "\n\nSalam,\nGenB Creative";
        $headers = "From: GenB Creative <sales@broadencreative.com>";
        mail($to,$subject,$message, $headers);
        
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
        $cari = $request->kata;
        $data_saran = Hubunginkami::where('nama','like',"%".$cari."%") -> paginate($batas);
        $no = $batas * ($data_saran->currentPage() - 1);
        return view('saran.search', compact('data_saran','no','cari'));
    }
    public function destroy($id){
        $hubunginkami = Hubunginkami::find($id);
        $hubunginkami->delete();
        return redirect()->route('hubunginkami.index');
    }
}
