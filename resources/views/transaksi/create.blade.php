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
                <div class="card-header">Transaksi</div>
                <div class="card-body">
                    <form action="{{route('transaksi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                                <label for="">Nama Menu</label>
                                <select name="menu_id" class="form-control">
                                     @foreach($menu as $data)
                                           <option value="{{$data->id}}">{{$data->nama_menu}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <select name="harga" class="form-control">
                                     @foreach($menu as $data)
                                           <option value="{{$data->harga}}">{{$data->harga}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                            @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Uang Pembayaran</label>
                            <input type="text" name="uang" class="form-control @error('uang') is-invalid @enderror">
                            @error('uang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                            
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline btn-sm btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-outline btn-sm btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection