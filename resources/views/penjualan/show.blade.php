@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nomber Meja</label>
                            <input type="text" name="no_meja" value="{{ $penjualan->id }}" disabled class="form-control @error('penjualan') is-invalid @enderror">
                            @error('no_meja')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pemesanan</label>
                            <input type="date" name="tgl_pemesanan" value="{{ $penjualan->tgl_pemesanan }}" disabled class="form-control @error('tgl_pemesanan') is-invalid @enderror">
                            @error('tgl_pemesanan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Menu</label>
                            <input type="number" name="jumlah_menu" value="{{ $penjualan->jumlah_menu }}" disabled class="form-control @error('jumlah_menu') is-invalid @enderror">
                            @error('jumlah_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Total</label>
                            <input type="number" name="total" value="{{ $penjualan->total }}" disabled class="form-control @error('total') is-invalid @enderror">
                            @error('total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Id Pembeli</label>
                            <input type="text" name="id_pembeli" value="{{ $penjualan->id_pembeli }}" disabled class="form-control @error('id_pembeli') is-invalid @enderror">
                            @error('id_pembeli')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Id Menu</label>
                            <input type="text" name="id_menu" value="{{ $penjualan->id_menu }}" disabled class="form-control @error('id_menu') is-invalid @enderror">
                            @error('id_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{url('admin/penjualan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

