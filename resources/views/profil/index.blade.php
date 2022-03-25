@extends('adminlte::page')
@section('content_header')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0"><center>PROFILE</center></h1>
                </div>
               
            </div>
        </div>
    </div>
@endsection

@section('content')
@include('layouts._flash')
<div class="container-fluid center">
  <div class="row">
    <div class="col col-lg-12 col-md-5">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile justify-center">
          <div class="text-center">
            <img src="{{ asset('image/anggi.jpeg') }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center">Anggi Fitria</h3>
          <p class="text-muted text-center">Member sejak : 20 Des 2020</p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            Babakan cilebak Rt.01/18
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            anggii.fitriaa@gmail.com
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            0895375028527
          </p>
          <hr>
        </div>
      </div>      
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{asset('Datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#menu').DataTable();
    });
</script>
@endsection 