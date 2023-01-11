@extends('admin.dashboard')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtTask as $item)
                                @if (auth()->user()->level == 'admin')
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->caption }}</td>
                                        <td>{{ $item->date }}</td>
                                        @if ($item->review == 'Pending')
                                            <td><span class="badge badge-warning">{{ $item->review }}</span>
                                            </td>
                                        @elseif($item->review == 'Approve')
                                            <td><span class="badge badge-primary">{{ $item->review }}</span>
                                            </td>
                                        @else
                                            <td><span class="badge badge-danger">{{ $item->review }}</span>
                                            </td>
                                        @endif
                                        <td><a href="/files/{{ $item->file }}">Download</a></td>

                                        <td>
                                            <a href="{{ url('hapustask', $item->id) }}" type="button"
                                                class="btn btn-danger" data-toggle="edit-atas" data-placement="right"
                                                title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                                            <a href="{{ url('ejtask', $item->id) }}" type="button" class="btn btn-warning"
                                                data-toggle="edit-atas" data-placement="right" title="Tolak data"><i
                                                    class="fas fa-times"></i></a>
                                            <a href="{{ url('acctask', $item->id) }}" type="button" class="btn btn-success"
                                                data-toggle="edit-atas" data-placement="right" title="Approve data"><i
                                                    class="fas fa-check"></i></a>
                                        </td>
                                    </tr>
                                @elseif(auth()->user()->level == 'user')
                                    @if ($item->name == auth()->user()->name)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->caption }}</td>
                                            <td>{{ $item->date }}</td>
                                            @if ($item->review == 'Pending')
                                                <td><span class="badge badge-warning">{{ $item->review }}</span>
                                                </td>
                                            @elseif($item->review == 'Approve')
                                                <td><span class="badge badge-primary">{{ $item->review }}</span>
                                                </td>
                                            @else
                                                <td><span class="badge badge-danger">{{ $item->review }}</span>
                                                </td>
                                            @endif
                                            <td><a href="{{ $item->file }}">Download</a></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ url('hapustask', $item->id) }}" type="button"
                                                        class="btn btn-danger" data-toggle="edit-atas"
                                                        data-placement="right" title="Hapus data"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
