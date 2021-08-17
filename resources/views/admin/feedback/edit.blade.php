@extends('admin.home')
@section('content')
<div class="row">
 <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Form Edit Kepuasan Client
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form action="{{ route('feedback.update', $feedback->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="nama">Nama Client</label>
            <input type="text" class="form-control" name="nama" value="{{$feedback->nama}}">
</div>
<div class="form-group">
    <label for="Keterangan"> Keterangan </label>
    <textarea name="keterangan" class="form-control">{{$feedback->keterangan}}</textarea>
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