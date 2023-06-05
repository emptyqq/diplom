@extends('shablons.admin')

@section('title')
    ewqewq
@endsection

@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded d-flex p-2 mt-3">
            <h1 class="">Категории</h1>
            <div class="align-items-center d-flex ms-auto">
                <a href="" class="btn btn-danger">Добавить
                    категорию</a>
            </div>
        </div>
        <div class="nav_menu_color rounded mt-1 p-2">
            <table class="table text-white mx-auto table-hover caption-top">
                <caption class="text-light">
                    <div class="input-group mb-3 w-25">
                        <input type="text" class="form-control" placeholder="Поиск контента" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">
                            <div class="ms-3">Название</div>
                        </th>
                        <th scope="col">Действия</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="ms-3">Новинки</div>
                        </td>
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
                        <th scope="row">2</th>
                        <td>
                            <div class="ms-3">Фильмы</div>
                        </td>
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
                        <th scope="row">3</th>
                        <td>
                            <div class="ms-3">Сериалы</div>
                        </td>
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
                        <th scope="row">4</th>
                        <td>
                            <div class="ms-3">Концерты</div>
                        </td>
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
@endsection
