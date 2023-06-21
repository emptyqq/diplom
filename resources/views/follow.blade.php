@extends('shablons.main')

@section('title')
    Подписка
@endsection

@section('main')
    <div class="p-5 m-5">
        <div class="d-flex justify-content-center align-items-center mb-5">
            <svg class="me-4" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                <path
                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
            <div class="text-center display-5">Оплата прошла успешно</div>
        </div>
        <div class="text-center mb-4">Подписка истекает {{ $dateUnFollow }}</div>
        <div class="text-center">
            <a href="{{route('home')}}" class="btn btn-light">На главную</a>
        </div>
    </div>
@endsection
