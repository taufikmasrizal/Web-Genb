<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portofolio;
use App\klien;
class GuestController extends Controller
{
    public function index(){
        $portofolios = Portofolio::all();
        return view('portofoliopage', compact('portofolios'));
    }
    public function utama(){
        $portofolio = Portofolio::all();
        $client = Klien::all();
        return view('index', ['client' => $client,'portofolio'=>$portofolio]);
    }
    public function produk(){
        $produk = Produk::all();
        return view('produkpage', compact('produk'));
    }
    
    
}
