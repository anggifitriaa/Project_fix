@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')



@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input type="text" name="nama_pembeli" value="{{ $transaksi->nama }}" class="form-control" readonly>
                            </div>
                    <div class="form-group">
                                <label for="">Harga Paket</label>
                                <br>
                                <input type="text" name="harga" value="{{ $transaksi->menu->harga }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Menu</label>
                                <input type="text" name="nama_menu" value="{{ $transaksi->menu->nama_menu }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Uang Pembayaran</label>
                                <input type="text" name="uang" value="Rp.{{ number_format($transaksi->uang) }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="total" value="Rp.{{ number_format($transaksi->total) }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">kembalian</label>
                                <input type="text" name="kembalian" value="Rp.{{ number_format($transaksi->kembalian) }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/transaksi') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('css')

@endsection

@section('js')

@endsection