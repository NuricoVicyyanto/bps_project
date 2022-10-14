@extends('admin.dashboard')
@section('content')

<div class="container-fluid">

  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-lg-12">
      </div>
      <div class="col-lg-12">
        <div class="shadow p-3 mb-4 bg-white rounded">
          <!-- <div class="pb-3">
            <a href="/tambahpengguna" class="btn btn-primary">Tambah data</a>
          </div> -->
          <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dtPengguna as $item)
              <tr>
                <td>{{ $item->name}}</td>
                <td>{{ $item->email}}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ url('hapuspengguna', $item->id) }}" type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->
</div>
@endsection