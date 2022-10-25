@extends('admin.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">QrCode Maker</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form class="form-inline" action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" name="title" placeholder="Masukkan Teks">
                            <input type="text" class="form-control" name="name" placeholder="Masukkan Teks">
                        </div>
                        <button type="submit" class="btn btn-primary ml-1 mb-2">Create</button>
                    </form>
                    <br>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Link</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <a href="{{ route('generate', $data->id) }}" class="btn btn-primary"><i
                                                class="fas fa-qrcode"></i></a>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yaking ingin menghapus <b>{{ $data->title }}</b> ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <a href="{{ url('delqr', $data->id) }}" type="button"
                                                            class="btn btn-danger" data-toggle="edit-atas"
                                                            data-placement="right" title="Hapus data">Ya, Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
@endsection
