@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Transaksi</h1>
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
                    Transaksi
                    <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Harga Paket</th>
                                <th>Nama Menu</th>
                                <th>Jumlah</th>
                                <th>Uang Pembayaran</th>
                                <th>Total</th>
                                <th>Kembalian</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($transaksi as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>Rp.{{number_format($data->menu->harga )}}</td>
                                <td>{{ $data->menu->nama_menu}}</td>
                                <td>{{ $data->jumlah}}</td>
                                <td>Rp. {{number_format($data->uang,2,",",",")}}</td>
                                <td>Rp. {{number_format($data->total,2,",",",")}}</td>
                                <td>Rp. {{number_format($data->kembalian,2,",",",")}}</td>
                                
    

                                <td>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <!-- <a href="{{ route('transaksi.edit', $data->id) }}" class="btn btn-outline-info">Edit</a> -->
                                        <a href="{{ route('transaksi.show', $data->id) }}" class="btn btn-outline btn-sm btn btn-warning">Lihat</a>
                                        <button type="submit" class="btn btn-outline btn-sm btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

