@extends('admin.dashboard')
@section('content')

<div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NIP</th>
                                      <th>Username</th>
                                      <th>Email</th>
                                      <th>No HP</th>
                                      <th>Jabatan</th>
                                      <th>Level</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($dtPengguna as $item)
                                    <tr>
                                      <td>{{ $item->nip}}</td>
                                      <td>{{ $item->name}}</td>
                                      <td>{{ $item->email}}</td>
                                      <td>{{ $item->no_hp}}</td>
                                      <td>{{ $item->jabatan}}</td>
                                      <td>{{ $item->level}}</td>
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
@endsection