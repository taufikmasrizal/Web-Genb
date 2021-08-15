@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Form Edit Client
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('klien.update', $klien->id) }}" method="post" enctype="multipart/form-data">
            @csrf
<div class="form-group">
    <label for="Keterangan"> Keterangan </label>
    <textarea name="keterangan" class="form-control">{{$klien->keterangan}}</textarea>
</div>
<div class="form-group">
    <label>Foto</label>
    <br><img src="{{ asset('thumb/'.$klien->foto) }}" style="width: 100px">
</div>
<div class="form-group">
    <label for="foto">Ganti Foto</label>
    <input type="file" class="form-control" name="foto">
    <label>*) Jika foto tidak diganti,kosongkan saja</label>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/klien" class="btn btn-warning"> Batal</a>
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