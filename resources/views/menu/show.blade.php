@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Tampilan Menu</div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        </div>
                        <div class="form-group ml-5 col-10">
                            <label for="">Nama Menu</label>
                            <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" disabled class="form-control @error('nama_menu') is-invalid @enderror">
                            @error('nama_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group ml-5 col-10">
                            <label for="">Harga</label>
                            <input type="text" name="harga" value="{{ $menu->harga }}" disabled class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group ml-5 col-10">
                            <label for="">Deskripsi</label>
                            <input type="text" name="harga" value="{{ $menu->deskripsi }}" disabled class="form-control @error('deskripsi') is-invalid @enderror">
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group ml-5">
                            <label>Foto</label><br>
                            <img src="{{ asset('image/'.$menu->gambar_menu) }}" alt="" style="width:150px; height:150px;" alt="gambar_menu">
                        </div>

                    </form>
                </div>
                <a class="btn btn-primary" href="{{url('admin/menu')}}" role="button">kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection

