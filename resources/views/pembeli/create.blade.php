@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Pembeli</h1>
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
                <div class="card-header">Pembeli</div>
                <div class="card-body">
                    <form action="{{route('pembeli.store')}}" method="post">
                        @csrf


                        
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                                <select type="text" name="id_menu" class="form-control">
                                @foreach ($menu as $data)
                                <option value="{{$data->id}}">{{$data->nama_menu}}</option>
                                @endforeach
                                <select>
                        </div>
                        <div class="form-group">
                            <label for="">Harga Menu</label>
                                <select type="text" name="harga" class="form-control">
                                @foreach ($menu as $data)
                                <option value="{{$data->id}}">{{$data->harga}}</option>
                                @endforeach
                                <select>
                        </div>
                               
                               
                               <!-- <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->
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
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

