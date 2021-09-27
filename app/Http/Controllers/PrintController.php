<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datacollection;
use PDF;
class PrintController extends Controller
{
    public function index(){
        $batas = 4;
        $datacollection = Datacollection::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($datacollection->currentPage() - 1);
        return view('admin.datacollection.index', compact('datacollection', 'no'));
     }
    public function print(){
    $pdf = PDF::loadview('admin.datacollection.index')->setPaper('A4','potrait');
    return $pdf->stream();
}
}
