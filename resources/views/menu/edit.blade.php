@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data menu</h1>
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
                    <div class="card-body">
                        <form action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Judul menu</label>
                                <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}"
                                    class="form-control @error('nama_menu') is-invalid @enderror">
                                @error('nama_menu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan gambar</label>
                                <br>
                                <img src="{{ asset('image/'.$menu->gambar_menu) }}" height="100" style="padding:10px;" />
                                <input type="file" name="gambar_menu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Harga menu</label>
                                <input type="number" name="harga" value="{{ $menu->harga }}"
                                    class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Deskripsi menu</label>
                                <input type="text" name="deskripsi" value="{{ $menu->deskripsi }}"
                                    class="form-control @error('deskripsi') is-invalid @enderror">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
