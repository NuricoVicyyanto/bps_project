@extends('admin.dashboard')
@section('content')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Surat</a></li>
    {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Surat Keluar</a></li> --}}
    <li class="breadcrumb-item active" aria-current="page">Surat Masuk</li>
    </ol>
    </nav>
<!-- /Breadcrumb -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Updated border colors such as for an error state -->
<!-- Add to .select ➡️ style="--select-border: red; --select-focus: red" -->
<form action="{{ url('updateincomingmail',$dok->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
                
        <div class="col-sm-2">
            <label for="nama" class="col-form-label">NO</label>
          <input type="number" class="form-control" id="no" placeholder="No">
        </div>
        <div class="col-sm-3">
            <label for="nama" class="col-form-label" >Index</label>
            <select  id="index" name="index" class="custom-select">
                <option selected>{{ $dok->index}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
                <option value="3">6</option>
              </select>
          </div>
          <div class="col-sm-3">
            <label for="nama" class="col-form-label">Bulan</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Bulan" value="{{ $dok->date}}">
          </div>
          <div class="col-sm-4">
            <label for="nama" class="col-form-label">Kode Surat</label>
            <input type="text" class="form-control" id="kode_surat" name="kode_surat" placeholder="Kode Surat" value="{{ $dok->kode_surat}}">
          </div>
      </div>
    <div class="form-group">
        <label for="nama" class="col-form-label">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $dok->alamat}}">
    </div>
    <div class="form-group">
        <label for="nama" class="col-form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Perihal" value="{{ $dok->tanggal}}">
      </div>
    <div class="form-group">
        <label for="nama" class="col-form-label">Perihal</label>
        <input type="text-area" class="form-control" id="perihal" name="perihal" placeholder="Perihal" value="{{ $dok->perihal}}">
      </div>
      <div class="form-group">
        <input name="gambar" type="file" id="gambar" required>
      </div>
      <div class="form-group">
        {{-- <img src="{{ asset('img/'. $inf->gambar)}}" height="10%" width="50%" alt=""> --}}
        <img src="{{ asset($dok->file)}}" height="10%" width="50%" alt="">
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
  </form>
          
    <!-- /.container-fluid -->
@endsection
