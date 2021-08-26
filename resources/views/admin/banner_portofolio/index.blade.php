@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">Tabel Banner Portofolio Page</h1>
    @if (Session::has('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}</div>
    @endif
    <div class="table-responsive mt-5"></div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul Banner Portofolio</th>
                <th>Foto</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bannerportofolio as $data)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $data->judul_banner_portofolio }} </td>
                    <td><img src="{{ asset('thumb/' . $data->foto) }}" style="width: 100px"></td>
                    <td>{{ $data->created_at }} </td>
                    <td>{{ $data->updated_at }} </td>
                    <td>
                        <form action="{{ route('bannerportofolio.destroy', $data->id) }}" method="POST">@csrf
                            <a href="{{ route('bannerportofolio.edit', $data->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i> Edit </a>
                            <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                                <i class="fa fa-times"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div style="float: right">{{ $bannerportofolio->links() }}</div>
@endsection
