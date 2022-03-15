@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pembeli</div>
                <div class="card-body">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" disabled class="form-control @error('nam_pembeli') is-invalid @enderror">
                            @error('nama_pembeli')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Paket</label>
                            <input type="text" name="nama_paket" value="{{ $pembeli->nama_paket }}" disabled class="form-control @error('nama_paket') is-invalid @enderror">
                            @error('nama_paket')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">jumlah</label>
                            <input type="number" name="jumlah" value="{{ $pembeli->jumlah }}" disabled class="form-control @error('jumlah') is-invalid @enderror">
                            @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{url('admin/pembeli')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

