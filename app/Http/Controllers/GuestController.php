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
use App\BannerHome;
use App\BannerPortofolio;
use App\BannerProduk;
use App\Tentang;
use App\BannerTentang;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class GuestController extends Controller
{
    public function index(){
        $portofolios = Portofolio::all();
        $bannerportofolio = BannerPortofolio::all();
        $kontak = Kontak::all();
        return view('portofoliopage', ['portofolios' => $portofolios,'bannerportofolio'=>$bannerportofolio, 'kontak'=>$kontak]);
    }
    public function utama(){
        $portofolio = Portofolio::all();
        $client = Klien::all();
        $feedback = Feedback::all();
        $kontak = Kontak::all();
        $produksosialmedia = ProdukSosialMedia::all();
        $produkbrandingdesign = ProdukBrandingDesign::all();
        $produkkontenmarketing = ProdukKontenMarketing::all();
        $produkphotography = ProdukPhotography::all();
        $bannerhome = BannerHome::all();
        return view('index', ['client' => $client,'portofolio'=>$portofolio,'feedback'=>$feedback, 'kontak'=>$kontak, 'produksosialmedia'=>$produksosialmedia, 'produkbrandingdesign'=>$produkbrandingdesign, 'produkkontenmarketing'=>$produkkontenmarketing, 'produkphotography'=>$produkphotography, 'bannerhome'=>$bannerhome]);
    }
    public function produk(){
        $produk = Produk::all();
        $kontak = Kontak::all();
        $produksosialmedia = ProdukSosialMedia::all();
        $produkbrandingdesign = ProdukBrandingDesign::all();
        $produkkontenmarketing = ProdukKontenMarketing::all();
        $produkphotography = ProdukPhotography::all();
        $bannerproduk = BannerProduk::all();
        return view('produkpage', ['produk' => $produk,'kontak'=>$kontak,'produksosialmedia'=>$produksosialmedia ,'produkbrandingdesign'=>$produkbrandingdesign, 'produkkontenmarketing'=>$produkkontenmarketing, 'produkphotography'=>$produkphotography, 'bannerproduk'=>$bannerproduk]);
    }
    public function tentang(){
        $kontak = Kontak::all();
        $tentang = Tentang::all();
        $bannertentang = BannerTentang::all();
        return view('tentangpage', ['kontak' => $kontak, 'tentang'=>$tentang, 'bannertentang'=>$bannertentang]);
    }
}
