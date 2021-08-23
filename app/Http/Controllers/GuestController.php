<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portofolio;
use App\klien;
use App\Feedback;
use App\Kontak;
use App\Produk;
use App\ProdukSosialMedia;
use App\ProdukBrandingDesign;
use App\ProdukKontenMarketing;
use App\ProdukPhotography;
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
        $produksosialmedia = ProdukSosialMedia::all();
        return view('index', ['client' => $client,'portofolio'=>$portofolio,'feedback'=>$feedback, 'kontak'=>$kontak, 'produksosialmedia'=>$produksosialmedia]);
    }
    public function produk(){
        $produk = Produk::all();
        $kontak = Kontak::all();
        $produksosialmedia = ProdukSosialMedia::all();
        $produkbrandingdesign = ProdukBrandingDesign::all();
        $produkkontenmarketing = ProdukKontenMarketing::all();
        $produkphotography = ProdukPhotography::all();
        return view('produkpage', ['produk' => $produk,'kontak'=>$kontak,'produksosialmedia'=>$produksosialmedia ,'produkbrandingdesign'=>$produkbrandingdesign, 'produkkontenmarketing'=>$produkkontenmarketing, 'produkphotography'=>$produkphotography]);
    }
    public function tentang(){
        $kontak = Kontak::all();
        return view('tentangpage', compact('kontak'));
    }
    
}
