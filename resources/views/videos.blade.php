@extends('shablons.main')

@section('title')
    ewqewq
@endsection

@section('main')
    <h3>Назвн фильм</h3>
    <div class="" id="player"></div>
    <script>
        var player = new Playerjs({
            id: "player",
            file: "{{ asset('public/storage/video/video.mp4') }}",
            title: "Напзавние фильма",
        });
    </script>
    <hr>
    <div class="d-flex row mt-3">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 m-b">
            <img src="{{ asset('public/storage/img/movies_picture/qwe.jpg') }}" alt=""
                class="img-thumbnail background_right_menu border-0">
        </div>
        <div class="col">
            <h5>Сюжет</h5>
            <hr>
            <span>
                Фильм основан на популярной настольной игре и ремейке одноимённого мультфильма 80-х годов. Бард и авантюрист
                Эдгин Дарвис вместе с боевой подругой Хольгой сбегает из тюрьмы и отправляется повидать дочку, которую
                последние годы опекал его бывший подельник Фордж. По прибытии выясняется, что тот при поддержке
                подозрительной колдуньи Софины не только сказочно разбогател и сделался губернатором, но и настроил дочь
                против отца, да и вообще — не против избавиться от Эдгина и Хольги. Умудрившись отбиться от палачей,
                отчаянная парочка планирует страшную месть, а для этого им придётся объединиться с рассеянным магом
                Саймоном, ловкой друидкой Дорик и отыскать считавшийся утерянным волшебный шлем.
            </span>
            <hr>
            <h5>Информация</h5>
            <div class="p-2">Рейтинг</div>
            <div class="p-2">Год выхода	</div>
            <div class="p-2">Страна</div>
            <div class="p-2">Жанр</div>
            <div class="p-2">Режиссёр</div>
            <div class="p-2">В ролях</div>
            <div class="p-2">Длительность</div>
            <div class="p-2">Возраст</div>
        </div>
    </div>
@endsection
