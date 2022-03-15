@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')


@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class = "card-header">
            <button onclick = "window.print()" class = "btn btn-primary"><i class = "fa fa-print">Print</i></button>
                </div>
     <!-- /.card-heading -->
        <div class="card-body">
           <h2 style="background-color: rgba(0, 153, 255, 0.83);"><center><font color= black><h3>Laporan Kasir</h3></color></h2>
               <div class="table-responsive">
                   <table class="table">
                       <table class = "table" border = "1" id="example">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Harga Paket</th>
                                <th>Nama Menu</th>
                                <th>Jumlah</th>
                                <th>Uang Pembayaran</th>
                                <th>Total</th>
                                <th>Kembalian</th>
                                
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($laporan as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->menu->harga}}</td>
                                <td>{{ $data->menu->nama_menu}}</td>
                                <td>{{ $data->jumlah}}</td>
                                <td>{{ $data->uang}}</td>
                                <td>{{ $data->total }}</td>
                                <td>{{ $data->kembalian }}</td>


                                    </tr>
                                @endforeach
                             </tbody>
                             </table>
                         </div>
                     <!-- /.table-responsive -->
                 </div>
             <!-- /.card-body -->
        </div>   
    </div>
@endsection