@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Form Edit Produk
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="Nama Produk">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}">
</div>
<div class="form-group">
    <label for="Keterangan"> Keterangan </label>
    <textarea name="keterangan" class="form-control">{{$produk->keterangan}}</textarea>
</div>
<div class="form-group">
    <label>Foto</label>
    <br><img src="{{ asset('thumb/'.$produk->foto) }}" style="width: 100px">
</div>
<div class="form-group">
    <label for="foto">Ganti Foto</label>
    <input type="file" class="form-control" name="foto">
    <label>*) Jika foto tidak diganti,kosongkan saja</label>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/produk" class="btn btn-warning"> Batal</a>
</div>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
@endsection