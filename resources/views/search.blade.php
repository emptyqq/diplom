@extends('shablons.main')

@section('title')
    Поиск
@endsection

@section('main')
    <h3>Результаты поиска</h3>

    <div class="row gy-4 gx-5">
        @forelse ($contents as $content)
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card card_body_color rounded-3">
                    <img src="{{ asset($content->img) }}" class="card-img-top" alt="...">
                    <div class="card-body card_body_color text-white">
                        <a class="text-decoration-none text-white"
                            href="{{ route('videos', ['content' => $content->id]) }}">
                            <p class="card-title text-center text_ellipsis">{{ $content->name }}</p>
                        </a>
                        <p class="card-text text-center text_ellipsis text-secondary">{{ $content->name_eng }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center display-5 text-secondary p-4">Ничего не найдено</p>
        @endforelse
    </div>
@endsection
