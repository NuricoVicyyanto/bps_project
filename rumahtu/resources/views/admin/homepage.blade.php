@extends('admin.dashboard')
@section('content')
        <section class="wrapper">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="row">

                            @foreach ($dtTools as $item)
                                {{-- <div class="col-xs-12 col-sm-4">
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
                                </div> --}}
                                <a href="{{ $item->link }}" class="btn btn-sq-lg m-2 shadow" target="blank_">
                                    <img src="/images/{{ $item->image }}" />
                                    <p>{{ $item->title }}</p>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
           .btn-sq-lg {
                background-color: rgb(211, 211, 211);
                width: 200px !important;
                height: 200px !important;
            }
            .btn-sq-lg img {
                width: 150px;
                height: 150px;
                object-fit: cover;
                padding-top: 30px;
            }
        </style>
    @endsection
