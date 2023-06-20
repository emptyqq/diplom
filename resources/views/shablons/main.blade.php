<?
    $navList = App\Models\Type::whereNotNull("name")->get();
    // foreach ($navList as $nav) {
        // $nav->children = App\Models\Category::where("parent_id", $nav->id)->get();
    // }
?>

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
    <script src="{{ asset('public/js/playerjs.js') }}" type="text/javascript"></script> {{-- для видоса --}}
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
                        <h6 class="text-secondary">Библиотека</h6>
                        {{-- <li class="nav-item">
                            <a href="{{ route('news') }}"
                                class="nav-link @if (Route::currentRouteName() == 'news') active @endif px-0">
                                <i class="bi bi-patch-exclamation-fill text-white"></i> <span
                                    class="ms-1  text-white">Новинки</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('news') }}"
                                class="nav-link @if (Route::currentRouteName() == 'news') active @endif px-0">
                                <i class="bi bi-patch-exclamation-fill text-white"></i> <span
                                    class="ms-1  text-white">Новинки</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('movies') }}"
                                class="nav-link @if (Route::currentRouteName() == 'movies') active @endif px-0 ">
                                <i class="bi bi-camera-reels text-white"></i> <span
                                    class="ms-1  text-white">Фильмы</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('serials') }}"
                                class="nav-link px-0 align-middle @if (Route::currentRouteName() == 'serials') active @endif">
                                <i class="bi bi-tv text-white"></i> <span class="ms-1 text-white">Сериалы</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('concerts') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'concerts') active @endif">
                                <i class="bi bi-music-note-list text-white"></i> <span
                                    class="ms-1 text-white">Концерты</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('docfilms') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'docfilms') active @endif align-middle">
                                <i class="bi bi-file-earmark-post text-white"></i> <span
                                    class="ms-1 text-white">Докуфильмы</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('docserials') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'docserials') active @endif align-middle">
                                <i class=" bi bi-file-earmark-post-fill text-white"></i> <span
                                    class="ms-1 text-white">Докусериал</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tv') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'tv') active @endif align-middle">
                                <i class="bi bi-pip text-white"></i> <span class="ms-1  text-white">ТВ Шоу</span>
                            </a>
                        </li>
                        <h6 class="text-secondary">Остальное</h6>
                        <li class="nav-item">
                            <a href="{{ route('trophy') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'trophy') active @endif align-middle">
                                <i class="bi bi-trophy-fill text-white"></i> <span
                                    class="ms-1 d-sm-inline text-white">Награды</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subscription') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'subscription') active @endif align-middle">
                                <i class="bi bi-piggy-bank-fill text-white"></i> <span
                                    class="ms-1 d-sm-inline text-white">Купить премиум</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
        </nav>

        <div class="" id="main-content" style="display: grid;grid-template-columns: 1fr 8fr; gap: 0rem;">
            <div class="px-sm-auto px-auto nav_menu_color" id="pc_nav"
                style="position: sticky; height: 100vh; top: 0">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="d-none d-sm-inline" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path
                                d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                        </svg>
                        <span class="fs-5 mx-1">ТвоёКино</span>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0" id="menu">
                        <h6 class="text-secondary">Библиотека</h6>
                        <li class="nav-item ">
                            <a href="{{ route('news') }}"
                                class="nav-link @if (Route::currentRouteName() == 'news') active @endif px-0">
                                <i class="bi bi-patch-exclamation-fill text-white"></i> <span
                                    class="ms-1  text-white">Новинки</span>
                            </a>
                        </li>
                        @foreach ($navList as $nav)
                            <li class="nav-item">
                                <a href="{{ route('type', ['type' => $nav->id]) }}"
                                    class="nav-link @if (isset($type) && $nav->id == $type->id) active @endif px-0">
                                    <i class="bi {{ $nav->icon }} text-white"></i>
                                    <span class="ms-1  text-white">{{ $nav->name }}</span>
                                </a>
                            </li>
                        @endforeach
                        {{-- <li class="nav-item ">
                            <a href="{{ route('news') }}"
                                class="nav-link @if (Route::currentRouteName() == 'news') active @endif px-0">
                                <i class="bi bi-patch-exclamation-fill text-white"></i> <span
                                    class="ms-1  text-white">Новинки</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('movies') }}"
                                class="nav-link @if (Route::currentRouteName() == 'movies') active @endif px-0 ">
                                <i class="bi bi-camera-reels text-white"></i> <span
                                    class="ms-1  text-white">Фильмы</span>
                            </a>
                        </li>
 
                        <li class="nav-item">
                            <a href="{{ route('concerts') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'concerts') active @endif">
                                <i class="bi bi-music-note-list text-white"></i> <span
                                    class="ms-1 text-white">Концерты</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('docfilms') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'docfilms') active @endif align-middle">
                                <i class="bi bi-file-earmark-post text-white"></i> <span
                                    class="ms-1 text-white">Докуфильмы</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('docserials') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'docserials') active @endif align-middle">
                                <i class=" bi bi-file-earmark-post-fill text-white"></i> <span
                                    class="ms-1 text-white">Докусериал</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tv') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'tv') active @endif align-middle">
                                <i class="bi bi-pip text-white"></i> <span class="ms-1  text-white">ТВ Шоу</span>
                            </a>
                        </li>
                        <h6 class="text-secondary">Остальное</h6>
                        <li class="nav-item">
                            <a href="{{ route('trophy') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'trophy') active @endif align-middle">
                                <i class="bi bi-trophy-fill text-white"></i> <span
                                    class="ms-1 d-sm-inline text-white">Награды</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subscription') }}"
                                class="nav-link px-0 @if (Route::currentRouteName() == 'subscription') active @endif align-middle">
                                <i class="bi bi-piggy-bank-fill text-white"></i> <span
                                    class="ms-1 d-sm-inline text-white">Купить премиум</span>
                            </a>
                        </li> --}}
                    </ul>
                    <hr>
                    {{-- <div class="dropdown pb-4">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://i.pinimg.com/564x/60/49/41/60494114ea0e37994ff54727975a9a85.jpg"
                                alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="mx-1">{{ Auth::user()->login }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                            aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Профиль</a></li>
                            <li><a class="dropdown-item" href="{{route('admin')}}">Настройки</a></li>
                            <li><a class="dropdown-item" href="#">Подписка</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('core.logout') }}">Выйти</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            {{-- mx-auto удалил, хз при отдалении хуета или норм... хз хз хз  --}}
            <div class="background_right_menu" style="">
                <nav class="navbar navbar-expand bg-body-tertiary nav_menu_color" data-bs-theme="dark">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form action="{{ route('search') }}" class="d-flex" role="search">
                                <div class="input-group">
                                    <input required name="name" class="form-control border border-end-0"
                                        type="search" placeholder="Поиск" aria-label="Search">
                                    <button href="{{ route('search') }}" class="btn btn-dark border-start-0 border "
                                        type="submit">
                                        <i class="bi bi-search text-white"></i>
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
                                <li><a class="dropdown-item" href="#">Настройки</a></li>
                                @if (Auth::user()->status == 'ADMIN')
                                    <li><a class="dropdown-item" href="{{ route('content') }}">Админ панель</a></li>
                                @endif
                                <li><a class="dropdown-item" href="{{ route('subscription') }}">Подписка</a></li>
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
    <script src="{{asset('public/js/main.js')}}"></script>
    @yield('scripts')
</body>

</html>
