@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Form Portofolio
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('portofolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
 <div class="form-group">
    <label for="judul_portofolio">Judul </label>
    <input type="text" class="form-control" name="judul_portofolio">
</div>
<div class="form-group">
    <label for="keterangan"> Keterangan </label>
    <textarea name="keterangan" class="form-control" name="keterangan"></textarea>
</div>
<div class="form-group">
    <label for="foto"> Foto </label>
    <input type="file" class="form-control" name="foto">
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