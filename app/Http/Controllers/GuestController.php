<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portofolio;
use App\klien;
use App\Feedback;
use App\Kontak;
use App\Produk;
class GuestController extends Controller
{
    public function index(){
        $portofolios = Portofolio::all();
        return view('portofoliopage', compact('portofolios'));
    }
    public function utama(){
        $portofolio = Portofolio::all();
        $client = Klien::all();
        $feedback = Feedback::all();
        $kontak = Kontak::all();
        return view('index', ['client' => $client,'portofolio'=>$portofolio,'feedback'=>$feedback, 'kontak'=>$kontak]);
    }
    public function produk(){
        $produk = Produk::all();
        $kontak = Kontak::all();
        return view('produkpage', ['produk' => $produk,'kontak'=>$kontak]);
    }
    public function tentang(){
        $kontak = Kontak::all();
        return view('tentangpage', compact('kontak'));
    }
    
}
