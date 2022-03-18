@extends('adminlte::page')
@section('content_header')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0"><center>Daftar Karyawan</center></h1>
                </div>
               
            </div>
        </div>
    </div>
@endsection

@section('content')
@include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Karyawan
                    <a href="{{ route('karyawan.create') }}" 
                    class="btn btn-sm btn-outline-primary float-right">Tambah
                        Karyawan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="menu">
                            <thead>
                            <tr>
                            <th>No</th>
                                <th>Nama karyawan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @php $no=1; @endphp
                            @foreach ($karyawan as $data)
                            <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                
                                <td>{{ $data->nama_karyawan }}</td>
                                <td>
                                    <form action="{{route('karyawan.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-outline btn-sm btn btn-primary">Edit</a>
                                        <a href="{{ route('karyawan.show', $data->id) }}" class="btn btn-outline btn-sm btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-outline btn-sm btn btn-danger"
                                                        onclick="return confirm('Apakah anda yakin akan menghapus?');">Delete</button>
                                    </td>
                            </tr>
                            </tbody>
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


@section('css')
    <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{asset('Datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#menu').DataTable();
    });
</script>
@endsection 