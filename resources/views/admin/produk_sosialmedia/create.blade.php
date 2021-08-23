@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
@if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</ul>
@endif
<div class="panel-heading">
    Form Produk Social Media
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('produksosialmedia.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="Nama Produk">Nama Produk Sosial Media </label>
    <input type="text" class="form-control" name="nama_produk_sosialmedia">
</div>
<div class="form-group">
    <label for="keterangan"> Keterangan </label>
    <textarea name="keterangan" class="form-control" name="keterangan"></textarea>
</div>
<div class="form-group">
    <label for="foto"> Foto </label>
    <input type="file" class="form-control" name="foto">
</div>
<button type="submit" class="btn btn-success">SIMPAN</button>
<button type="/produk_sosialmedia" class="btn btn-warning">BATAL</button>
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