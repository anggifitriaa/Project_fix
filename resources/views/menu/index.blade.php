@extends('adminlte::page')
@section('content_header')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0"><center>Daftar Menu Masakan</center></h1>
                </div>
               
            </div>
        </div>
    </div>
@endsection

@section('content')
@include('layouts._flash')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Menu
                    <a href="{{ route('menu.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="menu">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama menu</th>
                                <th>Gambar Menu</th>
                                <th>Harga</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            @php $no=1; @endphp
                            @foreach ($menu as $data)
                            <tbody>
                            <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_menu }}</td>
                           <td><img src="{{ asset('image/'.$data->gambar_menu) }}" alt="" style="width:150px; height:150px;" alt="gambar_menu"></td>
                            <td>Rp. {{number_format($data->harga,2,",",",")}}</td>
                                <td>
                                <form action="{{ route('menu.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('menu.edit', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-warning">Edit</a>
                                                <a href="{{ route('menu.show', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-primary">Lihat</a>
                                                <button type="submit" class="btn btn-outline btn-sm btn btn-danger"
                                                    onclick="return confirm('Are you sure?');">Hapus</button>
                                            </form>
                                </td>
                            </tr>
                            </tbody>
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
