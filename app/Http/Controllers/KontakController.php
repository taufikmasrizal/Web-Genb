<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
class KontakController extends Controller
{
    public function get_all_kontak(){
        return response()->json(Kontak::all(), 200);
    }
    public function index(){
        $kontak = Kontak::all();
        return view('admin.kontak.index', compact('kontak'));
    }
    public function create(){
        return view('admin.kontak.create');
    }
    public function store(Request $request){
        $kontak = new Kontak;
        $kontak->no_kontak        = $request->no_kontak;
        $kontak->email            = $request->email;
        $kontak->alamat            = $request->alamat;
        $kontak->save();
        return redirect('/kontak');
    }
    public function edit($id){
        $kontak = Kontak::find($id);
        return view('admin.kontak.edit', compact('kontak'));
    }
    public function update(Request $request, $id){
        $kontak = Kontak::find($id);
        $kontak->no_kontak  = $request->no_kontak;
        $kontak->email  = $request->email;
        $kontak->alamat  = $request->alamat;
        $kontak->update();
        return redirect('/kontak');
    }
    public function destroy($id){
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect('/kontak');
    }
}
