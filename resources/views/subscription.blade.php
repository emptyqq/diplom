@extends('shablons.main')

@section('title')
    Подписка
@endsection

@section('main')
    <div class="nav_menu_color rounded p-3 mt-3">
        Наш сервис существует за счёт энтузиазма его создателей и пользователей.
        Помочь проекту может абсолютно каждый. Совершив небольшое пожертвование, вы окажете неоценимую услугу всем нам и,
        разумеется, не будете забыты и получите Премиум-аккаунт.
        <br>
        <br>

        За вашу поддержку мы предоставим вам следующие возможности нашего сайта:
        <br>
        <br>
        <ul>
            <li>Просмотр в высоком качестве и хорошим звуком</li>
            <li>Смотрите все новые фильмы и сериалы без рекламы</li>
            <li>Отмечать просмотренные серии и сезоны</li>
            <li>История просмотров, с запоминанием времени остановки</li>
            <li>Просмотр на мобильных устройствах</li>
            <li>Просмотр спортивных каналов. Услуга предоставляется в виде бонуса, и работает «как есть»</li>
            <li>Просмотр концертов и ТВ-шоу. Услуга предоставляется в виде бонуса, и работает «как есть»</li>
            <li>Просмотр документальных фильмов и сериалов. Услуга предоставляется в виде бонуса, и работает «как есть»</li>
        </ul>
    </div>
    <section class="mt-2">
        <h1 class="text-center">Купить подписку периодом</h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 mb-3 mt-4 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm nav_menu_color text-white">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">На 1 месяц</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">250 рублей<small class="text-muted fw-light"></small>
                            </h1>
                            <button type="button" class="w-100 btn btn-lg btn-danger mt-3">Купить</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm nav_menu_color text-white">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">на 3 месяца</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">700 рублей<small class="text-muted fw-light"></small>
                            </h1>
                            <button type="button" class="w-100 btn btn-lg btn-danger mt-3">Купить</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm nav_menu_color text-white">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">на 6 месяца</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">1300 рублей<small class="text-muted fw-light"></small>
                            </h1>
                            <button type="button" class="w-100 btn btn-lg btn-danger mt-3">Купить</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav_menu_color rounded p-3 mt-3">
                <h1 class="text-center">Остались вопросы? Сейчас решим нахуй</h1>
                <div class="mx-auto text-center nav_menu_color p-3">
                    <button class="btn text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Что даёт Премиум подписка?
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body nav_menu_color border-0">
                            Премиум подписка — это доступ к фильмам и сериалам на ТвоёКино.
                        </div>
                    </div>
                </div>
                <div class="mx-auto text-center nav_menu_color p-3">
                    <button class="btn text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                        Как отменить подписку?
                    </button>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body nav_menu_color border-0">
                            Отключить подписку несложно, но без неё вы потеряете все преимущества Премиума: больше не сможете
                            смотреть фильмы и сериалы на ТвоёКино.
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
@endsection
