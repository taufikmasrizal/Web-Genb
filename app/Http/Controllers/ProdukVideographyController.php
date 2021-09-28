<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukVideography;
use File;
use Image;

class ProdukVideographyController extends Controller
{
    public function index(){
        $batas = 4;
        $produkvideography = ProdukVideography::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produkvideography->currentPage() - 1);
        return view('admin.produk_videography.index', compact('produkvideography', 'no'));
     }
     public function create(){
         $produkvideography = ProdukVideography::all();
         return view('admin.produk_videography.create', compact('produkvideography'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_videography'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produkvideography = new ProdukVideography;
         $produkvideography->nama_produk_videography = $request->nama_produk_videography;
         $produkvideography->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1502,720)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produkvideography->foto = $namafile;
         $produkvideography->save();
         return redirect('/produkvideography')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produkvideography = ProdukVideography::find($id);
         return view('admin.produk_videography.edit', compact('produkvideography'));
     }
     public function update(Request $request, $id){
         $produkvideography = ProdukVideography::find($id);
         if ($request->has('foto')){
             $produkvideography->nama_produk_videography = $request->nama_produk_videography;
             $produkvideography->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1502,720)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produkvideography->foto = $namafile;
         }
         else{
             $produkvideography->nama_produk_videography = $request->nama_produk_videography;
             $produkvideography->keterangan       = $request->keterangan;
         }
         $produkvideography->update();
         return redirect('/produkvideography')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produkvideography = ProdukVideography::find($id);
         $namafile = $produkvideography->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produkvideography->delete();
         return redirect('/produkvideography')->with('pesan','Foto Berhasil Di Hapus');
     }
}
