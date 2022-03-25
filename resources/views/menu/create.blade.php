@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Menu</h1>
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
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label for="">Masukan Gambar</label>
                                <input type="file" name="gambar_menu" class="form-control @error('gambar_menu') is-invalid @enderror">
                                @error('gambar_menu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Menu</label>
                                <select type="text" name="nama_menu" class="form-control">
                                <option value="">--Pilih--</option>
                                <option value="Nasi Goreng">Nasi Goreng</option>
                                <option value="Ayam Geprek">Ayam Geprek</option>
                                <option value="Pecel lele">Pecel Lele</option>
                                <option value="Ayam Bakar">Ayam Bakar</option>
                                <option value="Gurame Goreng">Gurame Goreng</option>
                                <option value="Pepes Peda">Pepes Peda</option>
                                <option value="Pepes Tahu">Pepes tahu</option>
                                <option value="Jus Alpukat">Jus Alpukat</option>
                                <option value="Jus Nanas">Jus Nanas</option>
                                <option value="Jus Jeruk">Jus Jeruk</option>
                                <option value="Jus Mangga">Jus Mangga</option>
                                <option value="Jus jambu">Jus Jambu</option>
                                <option value="Teh Pucuk">Teh Pucuk</option>
                                <option value="Air Mineral">Air Mineral</option>
                                <option value="Salad Buah">Salad Buah</option>
                                <select>

                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="textarea" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline btn-sm btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-outline btn-sm btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

