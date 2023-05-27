@extends('shablons.main')

@section('title')
    Новинки
@endsection


@section('main')
    <h1>Новинки</h1>
    <div class="row gy-4 gx-1">
        @for ($i = 0; $i < 20; $i++)
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card border-0 rounded-3 mx-2">
                    <img class="w-100" src="{{ asset('public/storage/img/movies_picture/2.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body card_body_color text-white">
                        <p class="card-title text-center text_ellipsis">Переводчик</p>
                        <p class="card-text text-center text_ellipsis text-secondary">The Covenant</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
