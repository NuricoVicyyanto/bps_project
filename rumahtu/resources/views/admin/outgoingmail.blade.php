@extends('admin.dashboard')
@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Surat</a></li>
            {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Surat Keluar</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Surat Keluar</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <!-- /Breadcrumb -->
        <!-- Begin Page Content -->

        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Tambah Data
            </button>
        </p>
        <div class="collapse mb-3" id="collapseExample">
            <div class="card card-body">
                <form action="{{ route('simpansuratkeluar') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container-fluid">
                        <div class="form-group row">

                            <div class="col-sm-2">
                                <label for="nama" class="col-form-label">NO</label>
                                <input type="number" class="form-control" id="no" placeholder="No">
                            </div>
                            <div class="col-sm-3">
                                <label for="nama" class="col-form-label">Index</label>
                                <select class="custom-select">
                                    <option selected>Open this select menu</option>
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
                                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Bulan">
                            </div>
                            <div class="col-sm-4">
                                <label for="nama" class="col-form-label">Kode Surat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Kode Surat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Tanggal</label>
                            <input type="date" class="form-control" id="perihal" placeholder="Perihal">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Perihal</label>
                            <input type="text-area" class="form-control" id="perihal" placeholder="Perihal">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Upload Surat Masuk</label>
                            <div class="custom-file mb-2">
                                <input type="file" name="file" id="file" name="file">
                                {{-- <label class="custom-file-label" for="customFile">Surat Masuk</label> --}}
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                </form>
            </div>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Surat Keluar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Index</th>
                            <th>Bulan</th>
                            <th>No Surat</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Perihal</th>
                            <th>File</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    @foreach ($dtsuratkeluar as $item)
                        <tbody>
                            <td></td>
                            <td>{{ $item->index }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->kode_surat }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td><a href="{{ asset($item->file) }}" target="blank" rel="noopener oreferrer">Lihat
                                    Gambar</a></td>
                            <td>
                                <a href="" type="button" class="btn btn-danger" data-toggle="edit-atas"
                                    data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                                <a href="" type="button" class="btn btn-warning" data-toggle="edit-atas"
                                    data-placement="right" title="Tolak data"><i class="fas fa-times"></i></a>
                                <a href="" type="button" class="btn btn-success" data-toggle="edit-atas"
                                    data-placement="right" title="Approve data"><i class="fas fa-check"></i></a>
                            </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
@endsection
