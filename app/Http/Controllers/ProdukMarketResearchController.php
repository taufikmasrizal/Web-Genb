<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukMarketResearch;
use File;
use Image;

class ProdukMarketResearchController extends Controller
{
    public function index(){
        $batas = 4;
        $produkmarketresearch = ProdukMarketResearch::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produkmarketresearch->currentPage() - 1);
        return view('admin.produk_marketresearch.index', compact('produkmarketresearch', 'no'));
     }
     public function create(){
         $produkmarketresearch = ProdukMarketResearch::all();
         return view('admin.produk_marketresearch.create', compact('produkmarketresearch'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_marketresearch'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produkmarketresearch = new ProdukMarketResearch;
         $produkmarketresearch->nama_produk_marketresearch = $request->nama_produk_marketresearch;
         $produkmarketresearch->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1502,720)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produkmarketresearch->foto = $namafile;
         $produkmarketresearch->save();
         return redirect('/produkmarketresearch')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produkmarketresearch= ProdukMarketResearch::find($id);
         return view('admin.produk_marketresearch.edit', compact('produkmarketresearch'));
     }
     public function update(Request $request, $id){
         $produkmarketresearch = ProdukMarketResearch::find($id);
         if ($request->has('foto')){
             $produkmarketresearch->nama_produk_marketresearch = $request->nama_produk_marketresearch;
             $produkmarketresearch->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1502,720)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produkmarketresearch->foto = $namafile;
         }
         else{
             $produkmarketresearch->nama_produk_marketresearch = $request->nama_produk_marketresearch;
             $produkmarketresearch->keterangan       = $request->keterangan;
         }
         $produkmarketresearch->update();
         return redirect('/produkmarketresearch')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produkmarketresearch = ProdukMarketResearch::find($id);
         $namafile = $produkmarketresearch->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produkmarketresearch->delete();
         return redirect('/produkmarketresearch')->with('pesan','Foto Berhasil Di Hapus');
     }
}
