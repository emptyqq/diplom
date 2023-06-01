@extends('shablons.main')

@section('title')
    поиск по ip
@endsection

@section('main')
    <h3>Результаты поиска</h3>

    <div class="row gy-4 gx-5">
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card card_body_color rounded-3">
                <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body card_body_color text-white">
                    <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                    <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card card_body_color rounded-3">
                <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body card_body_color text-white">
                    <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                    <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card card_body_color rounded-3">
                <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body card_body_color text-white">
                    <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                    <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card card_body_color rounded-3">
                <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body card_body_color text-white">
                    <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                    <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card card_body_color rounded-3">
                <img src="{{ asset('public/storage/img/movies_picture/1jpg.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body card_body_color text-white">
                    <p class="card-title text-center text_ellipsis">Подземелья и драконы</p>
                    <p class="card-text text-center text_ellipsis text-secondary">Dungeons & Dragons</p>
                </div>
            </div>
        </div>
    </div>
@endsection
