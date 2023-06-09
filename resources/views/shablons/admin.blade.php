<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>

<body class="background_right_menu">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-dark nav_menu_color" id="nav_mobile">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path
                                d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                        </svg>
                        <span class="fs-5 mx-1">ТвоёКино</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0" id="menu">
                        <li class="nav-item">
                            <a class=" nav-link  @if (str_contains(Request::route()->getName(), 'content')) active collapsed @endif  px-0"
                                data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                                aria-controls="collapseExample2">
                                <i class="bi bi-menu-button text-white"></i>
                                <span class="ms-1 text-white">Контент</span>
                            </a>
                            <div class="collapse @if (str_contains(Request::route()->getName(), 'content')) show @endif" id="collapseExample2">
                                <div class="card card-body nav_menu_color border-0">
                                    <a href="{{ route('content') }}"
                                        class="nav-link @if (Route::currentRouteName() == 'content') active @endif px-0">
                                        <span class="ms-1 text-white">Посмотреть контент</span>
                                    </a>
                                    <a href="{{ route('content_add') }}"
                                        class="nav-link border-0 @if (Route::currentRouteName() == 'content_add') active @endif px-0">
                                        <span class="ms-1 text-white">Добавить контент</span>
                                    </a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link  @if (str_contains(Request::route()->getName(), 'categories')) active collapsed @endif  px-0"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <i class="bi bi-list-task text-white"></i>
                                <span class="ms-1 text-white">Категории</span>
                            </a>
                            <div class="collapse @if (str_contains(Request::route()->getName(), 'categories')) show @endif" id="collapseExample">
                                <div class="card card-body nav_menu_color border-0">
                                    <a href="{{ route('categories') }}"
                                        class="nav-link @if (Route::currentRouteName() == 'categories') active @endif px-0">
                                        <span class="ms-1 text-white">Посмотреть категории</span>
                                    </a>
                                    <a href="{{ route('categories_add') }}"
                                        class="nav-link border-0 @if (Route::currentRouteName() == 'categories_add') active @endif px-0">
                                        <span class="ms-1 text-white">Добавить категорию</span>
                                    </a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link  @if (str_contains(Request::route()->getName(), 'genre')) active collapsed @endif  px-0"
                                data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                                aria-controls="collapseExample1">
                                <i class="bi bi-card-checklist text-white"></i>
                                <span class="ms-1 text-white">Жанры</span>
                            </a>
                            <div class="collapse @if (str_contains(Request::route()->getName(), 'genre')) show @endif" id="collapseExample1">
                                <div class="card card-body nav_menu_color border-0">
                                    <a href="{{ route('genre') }}"
                                        class="nav-link @if (Route::currentRouteName() == 'genre') active @endif px-0">
                                        <span class="ms-1 text-white">Посмотреть жанры</span>
                                    </a>
                                    <a href="{{ route('genre_add') }}"
                                        class="nav-link border-0 @if (Route::currentRouteName() == 'genre_add') active @endif px-0">
                                        <span class="ms-1 text-white">Добавить жанр</span>
                                    </a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users') }}"
                                class="nav-link @if (Route::currentRouteName() == 'users') active @endif px-0">
                                <i class="bi bi-people text-white"></i> <span
                                    class="ms-1 text-white">Пользователи</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

        <div class="" id="main-content" style="display: grid;grid-template-columns: 1fr 8fr; gap: 0rem;">
            <div class="px-sm-auto px-auto nav_menu_color" id="pc_nav"
                style="position: sticky; height: 100vh; top: 0">
                <div
                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="d-none d-sm-inline" xmlns="http://www.w3.org/2000/svg" width="25"
                            height="25" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path
                                d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                        </svg>
                        <span class="fs-5 mx-1">ТвоёКино</span>

                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0" id="menu">
                        {{-- <li class="nav-item">
                            <a href="{{ route('content') }}"
                                class="nav-link px-0 align-middle @if (Route::currentRouteName() == 'content') active @endif">
                                <i class="bi bi-menu-button text-white"></i> <span
                                    class="ms-1 text-white">Контент</span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class=" nav-link  @if (str_contains(Request::route()->getName(), 'content')) active collapsed @endif  px-0"
                                data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                <i class="bi bi-menu-button text-white"></i>
                                <span class="ms-1 text-white">Контент</span>
                            </a>
                            <div class="collapse @if (str_contains(Request::route()->getName(), 'content')) show @endif"
                                id="collapseExample2">
                                <div class="card card-body nav_menu_color border-0">
                                    <a href="{{ route('content') }}"
                                        class="nav-link @if (Route::currentRouteName() == 'content') active @endif px-0">
                                        <span class="ms-1 text-white">Посмотреть контент</span>
                                    </a>
                                    <a href="{{ route('content_add') }}"
                                        class="nav-link border-0 @if (Route::currentRouteName() == 'content_add') active @endif px-0">
                                        <span class="ms-1 text-white">Добавить контент</span>
                                    </a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link  @if (str_contains(Request::route()->getName(), 'categories')) active collapsed @endif  px-0"
                                data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-list-task text-white"></i>
                                <span class="ms-1 text-white">Категории</span>
                            </a>
                            <div class="collapse @if (str_contains(Request::route()->getName(), 'categories')) show @endif"
                                id="collapseExample">
                                <div class="card card-body nav_menu_color border-0">
                                    <a href="{{ route('categories') }}"
                                        class="nav-link @if (Route::currentRouteName() == 'categories') active @endif px-0">
                                        <span class="ms-1 text-white">Посмотреть категории</span>
                                    </a>
                                    <a href="{{ route('categories_add') }}"
                                        class="nav-link border-0 @if (Route::currentRouteName() == 'categories_add') active @endif px-0">
                                        <span class="ms-1 text-white">Добавить категорию</span>
                                    </a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link  @if (str_contains(Request::route()->getName(), 'genre')) active collapsed @endif  px-0"
                                data-bs-toggle="collapse" href="#collapseExample1" role="button"
                                aria-expanded="false" aria-controls="collapseExample1">
                                <i class="bi bi-card-checklist text-white"></i>
                                <span class="ms-1 text-white">Жанры</span>
                            </a>
                            <div class="collapse @if (str_contains(Request::route()->getName(), 'genre')) show @endif"
                                id="collapseExample1">
                                <div class="card card-body nav_menu_color border-0">
                                    <a href="{{ route('genre') }}"
                                        class="nav-link @if (Route::currentRouteName() == 'genre') active @endif px-0">
                                        <span class="ms-1 text-white">Посмотреть жанры</span>
                                    </a>
                                    <a href="{{ route('genre_add') }}"
                                        class="nav-link border-0 @if (Route::currentRouteName() == 'genre_add') active @endif px-0">
                                        <span class="ms-1 text-white">Добавить жанр</span>
                                    </a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users') }}"
                                class="nav-link @if (Route::currentRouteName() == 'users') active @endif px-0">
                                <i class="bi bi-people text-white"></i> <span
                                    class="ms-1 text-white">Пользователи</span>
                            </a>
                        </li>


                    </ul>
                    <hr>
                </div>
            </div>
            <div class="background_right_menu" style="">
                <nav class="navbar navbar-expand bg-body-tertiary nav_menu_color" data-bs-theme="dark">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="d-flex" role="search">
                                <div class="input-group">
                                    <input class="form-control border border-end-0" type="search"
                                        placeholder="Поиск" aria-label="Search">
                                    <button class="btn btn-dark border-start-0 border" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown mx-3">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (Auth::user()->img)
                                    <div class="avatar"
                                        style="width: 30px; height: 30px; background-image: url({{ asset(Auth::user()->img) }})">
                                    </div>
                                @else
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" fill="currentColor" class="bi bi-person-circle"
                                        viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                @endif
                                <span class="mx-1">{{ Auth::user()->login }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow dropdown-menu-lg-end"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Профиль</a></li>
                                <li><a class="dropdown-item disabled" href="#">Настройки</a></li>
                                @if (Auth::user()->status == 'ADMIN')
                                    <li><a class="dropdown-item" href="{{ route('content') }}">Админ панель</a></li>
                                @endif
                                <li><a class="dropdown-item" href="#">Подписка</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('core.logout') }}">Выйти</a></li>
                            </ul>
                        </div>
                    </div>

                </nav>
                <div class="p-3">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    @yield('scripts')
</body>

</html>
