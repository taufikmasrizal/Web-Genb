@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Form Edit Footer
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('kontak.update', $kontak->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="No Telp">Nomor Kontak</label>
            <input type="text" class="form-control" name="no_kontak" value="{{$kontak->no_kontak}}">
</div>
<div class="form-group">
            <label for="Email">Email Genb</label>
            <input type="text" class="form-control" name="email" value="{{$kontak->email}}">
</div>
<div class="form-group">
    <label for="Alamat"> Alamat Genb </label>
    <textarea name="alamat" class="form-control">{{$kontak->alamat}}</textarea>
</div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/feedback" class="btn btn-warning"> Batal</a>
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