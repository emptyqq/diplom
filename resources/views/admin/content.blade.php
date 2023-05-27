@extends('shablons.admin')

@section('title')
    Админ
@endsection

@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded d-flex p-2 mt-3">
            <h1 class="">Контент</h1>
            <div class="align-items-center d-flex ms-auto">
                <a href="#" class="btn btn-danger" role="button" data-bs-toggle="button">Добавить контент</a>
            </div>
        </div>
        <div class="nav_menu_color rounded mt-1 p-2">
            <div class="table-responsive">
                <table class="table text-white mx-auto table-hover caption-top">
                    <caption class="text-light">Поиск</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Категория</th>
                            <th scope="col">
                                <div class="ms-3">
                                    Обновлено
                                </div>
                            </th>
                            <th scope="col">Статус</th>
                            <th scope="col">Действия</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="ms-3">шрек</div>
                            </td>
                            <td>мультфильм</td>
                            <td>25.03.10 16:42:44</td>
                            <td>скрыто</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn text-white btn-sm ms-4" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-three-dots " viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu text-center">
                                        <li><a class="dropdown-item" href="#">Удалить</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('content_add') }}">Подробнее</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="ms-3">шрек</div>
                            </td>
                            <td>мультфильм</td>
                            <td>25.03.10 16:42:44</td>
                            <td>скрыто</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn text-white btn-sm ms-4" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-three-dots " viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu text-center">
                                        <li><a class="dropdown-item" href="#">Удалить</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('content_add') }}">Подробнее</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
