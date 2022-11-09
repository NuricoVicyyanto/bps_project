@extends('admin.dashboard')
@section('content')
    @if (auth()->user()->level == 'admin')
        <div class="container-fluid">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Tambah Data <i class="fas fa-plus"></i>
                </button>
            </p>
            <div class="collapse mb-3" id="collapseExample">
                <div class="card card-body">
                    <form action="{{ route('simpantools') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="form-group">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Title">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title" class="col-form-label">Link</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Link">
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Upload Image</label>
                                    <div class="custom-file mb-2">
                                        <input type="file" id="image" name="image">
                                        {{-- <label class="custom-file-label" for="customFile">Surat Masuk</label> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        @endif


        <section class="wrapper">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="row">

                            @foreach ($dtTools as $item)
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="{{ $item->link }}">
                                            <img src="{{ $item->image }}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="{{ $item->link }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="{{ $item->link }}" class="btn btn-link btn-block">
                                                Open
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
