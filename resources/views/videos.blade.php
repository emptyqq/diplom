@extends('shablons.main')

@section('title')
    ewqewq
@endsection

@section('main')
    <div class="d-flex">
        <h3 class="me-2 text-white">Подземелья и драконы: Честь среди воров <small class="background_right_menu">Dungeons & Dragons: Honor Among Thieves</small></h3>
    </div>
    <div class="" id="player"></div>
    <script>
        var player = new Playerjs({
            id: "player",
            file: "{{ asset('public/storage/video/podzfilm.mp4') }}",
            title: "",
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
            <div class="p-2 border">Рейтинг&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.3 / 10</div>
            <div class="p-2 border">Год выхода&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2023</div>
            <div class="p-2 border">Страна&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; США, Великобритания, Австралия, Канада, Ирландия, Исландия</div>
            <div class="p-2 border">Жанр&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Комедия, Боевик, Фэнтези, Эксклюзив</div>
            <div class="p-2 border">Режиссёр&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Джон Фрэнсис Дейли, Джонатан М. Голдштейн</div>
            <div class="p-2 border">В ролях &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Крис Пайн, Мишель Родригес, Реге-Жан Пейдж, Джастис Смит, София Лиллис, Хью Грант, Хлоя Коулмэн, Дэйзи Хэд, Кайл Хиксон</div>
            <div class="p-2 border">Длительность&nbsp;&nbsp;&nbsp;&nbsp; 02:15:57 / (135 мин)</div>
            <div class="p-2 border">Возраст&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12+</div>
        </div>
    </div>
@endsection
