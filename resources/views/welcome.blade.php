@extends('shablons.main')

@section('title')
    ТвоёКино
@endsection

@section('main')
    <div class="p-2">
        <h3>Популярные фильмы</h3>
        <p class="lead"></p>
        <div class="row gy-4 gx-5">
            @foreach ($contents as $contents_one_item)
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card card_body_color rounded-3">
                        <img src="{{ asset($contents_one_item->img) }}" class=" card-img-top" alt="...">
                        <div class="card-body card_body_color text-white">
                            <a class="text-decoration-none text-white" href="{{ route('videos') }}">
                                <p class="card-title text-center text_ellipsis">{{ $contents_one_item->name }}</p>
                            </a>
                            <p class="card-text text-center text_ellipsis text-secondary">{{ $contents_one_item->name_eng }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <h3>Новые фильм</h3>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class=" card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                        <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
