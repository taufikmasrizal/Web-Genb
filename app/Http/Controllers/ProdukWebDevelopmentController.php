<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukWebDevelopment;
use File;
use Image;

class ProdukWebDevelopmentController extends Controller
{
    public function index(){
        $batas = 4;
        $produkwebdevelopment = ProdukWebDevelopment::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produkwebdevelopment->currentPage() - 1);
        return view('admin.produk_webdevelopment.index', compact('produkwebdevelopment', 'no'));
     }
     public function create(){
         $produkwebdevelopment = ProdukWebDevelopment::all();
         return view('admin.produk_webdevelopment.create', compact('produkwebdevelopment'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_webdevelopment'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produkwebdevelopment = new ProdukWebDevelopment;
         $produkwebdevelopment->nama_produk_webdevelopment = $request->nama_produk_webdevelopment;
         $produkwebdevelopment->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1502,720)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produkwebdevelopment->foto = $namafile;
         $produkwebdevelopment->save();
         return redirect('/produkwebdevelopment')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produkwebdevelopment = ProdukWebDevelopment::find($id);
         return view('admin.produk_webdevelopment.edit', compact('produkwebdevelopment'));
     }
     public function update(Request $request, $id){
         $produkwebdevelopment = ProdukWebDevelopment::find($id);
         if ($request->has('foto')){
             $produkwebdevelopment->nama_produk_webdevelopment = $request->nama_produk_webdevelopment;
             $produkwebdevelopment->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1502,720)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produkwebdevelopment->foto = $namafile;
         }
         else{
             $produkwebdevelopment->nama_produk_webdevelopment = $request->nama_produk_webdevelopment;
             $produkwebdevelopment->keterangan       = $request->keterangan;
         }
         $produkwebdevelopment->update();
         return redirect('/produkwebdevelopment')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produkwebdevelopment = ProdukWebDevelopment::find($id);
         $namafile = $produkwebdevelopment->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produkwebdevelopment->delete();
         return redirect('/produkwebdevelopment')->with('pesan','Foto Berhasil Di Hapus');
     }
}
