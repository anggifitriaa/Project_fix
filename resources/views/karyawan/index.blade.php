@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Karyawan</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Karyawan
                    <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                        Karyawan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                            <th>No</th>
                                <!-- <th>Id karyawan</th> -->
                                <th>Nama karyawan</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($karyawan as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <!-- <td>{{ $data->id_karyawan }}</td> -->
                                <td>{{ $data->nama_karyawan }}</td>
                                <td>
                                    <form action="{{route('karyawan.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-outline btn-sm btn btn-primary">Edit</a>
                                        <a href="{{ route('karyawan.show', $data->id) }}" class="btn btn-outline btn-sm btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-outline btn-sm btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </td>
                            </tr>
                                    </form>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
