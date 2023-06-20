@extends('shablons.main')

@section('title')
    ewqewq
@endsection

@section('main')
    <div class="d-flex align-items-center">
        <h3 class="me-2 text-white">{{ $content->name }} <small
                class="background_right_menu ms-3">{{ $content->name_eng }}</small></h3>
        <form action="{{ route('content.favorite', ['content' => $content->id]) }}" method="POST">
            @csrf
            <button class="btn-like text-secondary d-flex align-items-center ms-5 @if (Cookie::has('favorites') && in_array($content->id, json_decode(Cookie::get('favorites')))) 
                active
            @endif">
                <i class="bi bi-star"></i>
                <i class="bi bi-star-fill"></i>
            </button>
        </form>
    </div>
    <div class="" id="player"></div>
    <script>
        var player = new Playerjs({
            id: "player",
            file: "{{ asset($content->video) }}",
            title: "",
        });
    </script>
    <hr>
    <div class="d-flex row mt-3">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 m-b">
            <img src="{{ asset($content->img) }}" alt="" class="img-thumbnail background_right_menu border-0">
        </div>
        <div class="col">
            <h5>Сюжет</h5>
            <hr>
            <span>
                {{ $content->description }}
            </span>
            <hr>
            <h5>Информация</h5>
            <ul class="list-group" data-bs-theme="dark">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Рейтинг</div>
                        <div class="col-lg-9">{{ $content->rating }}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Год выхода</div>
                        <div class="col-lg-9">{{ $content->published }}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Страна</div>
                        <div class="col-lg-9">{{ $content->country }}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Жанр</div>
                        <div class="col-lg-9">
                            @foreach ($genres as $genre)
                                {{ $genre->name }},
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Режиссёр</div>
                        <div class="col-lg-9">{{ $content->producet }}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Длительность</div>
                        <div class="col-lg-9">{{ $content->duration }}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">Возраст</div>
                        <div class="col-lg-9">{{ $content->age }}</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
