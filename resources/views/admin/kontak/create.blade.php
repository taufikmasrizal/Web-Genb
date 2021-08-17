@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Form Footer 
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('kontak.store') }}" method="post" enctype="multipart/form-data">
            @csrf
 <div class="form-group">
    <label for="Nomor Kontak">Nomor Kontak </label>
    <input type="text" class="form-control" name="no_kontak">
</div>
<div class="form-group">
    <label for="Email">email </label>
    <input type="text" class="form-control" name="email">
</div>
<div class="form-group">
    <label for="alamat"> Alamat </label>
    <textarea name="alamat" class="form-control" name="alamat"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit Button</button>
<button type="reset" class="btn btn-warning">Reset Button</button>
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