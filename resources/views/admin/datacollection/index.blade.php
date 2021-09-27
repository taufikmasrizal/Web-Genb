@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">Tabel Data Collection</h1>
    @if (Session::has('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}</div>
    @endif
    <div class="table-responsive mt-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Nomor Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Provinsi</th>
                    <th>Kota Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Pekerjaan</th>
                    <th>Sosial Media</th>
                    <th>Pengeluaran Perbulanan</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datacollection as $data)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $data->namalengkap }} </td>
                        <td>{{ $data->tgllahir }} </td>
                        <td>{{ $data->email }} </td>
                        <td>{{ $data->nomortelp }} </td>
                        <td>{{ $data->jeniskelamin }} </td>
                        <td>{{ $data->provinsi }} </td>
                        <td>{{ $data->kotakabupaten }} </td>
                        <td>{{ $data->kecamatan }} </td>
                        <td>{{ $data->kelurahan }} </td>
                        <td>{{ $data->pekerjaan }} </td>
                        <td>{{ $data->sosialmedia }} </td>
                        <td>{{ $data->pengeluaranperbulan }} </td>
                        <td>{{ $data->created_at }} </td>
                        <td>{{ $data->updated_at }} </td>
                        <td>
                            <form action="{{ route('datacollection.destroy', $data->id) }}" method="POST">@csrf
                                <a href="{{ route('print')}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i> Print </a>
                                <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                                    <i class="fa fa-times"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="float: right">{{ $datacollection->links() }}</div>
@endsection
