@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                        @csrf
                        @method('put')
                        <!-- <div class="form-group">
                            <label for="">No</label>
                            <input type="number" name="no" value="{{ $transaksi->no }}" class="form-control @error('no') is-invalid @enderror">
                            @error('no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->
                        <div class="form-group">
                        <label for="">Nama Pembeli</label>
                        <input type="text" name="nama" value="{{ $transaksi->nama }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>

                        <div class="form-group">
                        <label for="">menu</label>
                        <input type="text" name="nama_menu" value="{{ $transaksi->nama_menu}}" class="form-control @error('nama_menu') is-invalid @enderror">
                        @error('nama_menu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <!-- <div class="form-group">
                        <label for="">Harga paket</label>
                        <input type="text" name="harga" value="{{ $transaksi->harga}}" class="form-control @error('harga') is-invalid @enderror">
                        @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div> -->
                        <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control @error('jumlah') is-invalid @enderror">
                        @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="">Uang Pembayaran</label>
                        <input type="text" name="uang" value="{{ $transaksi->uang }}" class="form-control @error('uang') is-invalid @enderror">
                        @error('uang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                <div class="form-group">
                    <button type="reset" class="btn btn-outline btn-sm btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

