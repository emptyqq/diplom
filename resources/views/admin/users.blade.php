@extends('shablons.admin')

@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded d-flex p-2 mt-3">
            <h1 class="">Пользователи</h1>
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
                        <th scope="col">Логин</th>
                        <th scope="col">Email</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Дата создания аккаунта</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_users as $genre_odin_janr)
                        <tr>
                            <th scope="row">{{ $genre_odin_janr->id }}</th>
                            <td>
                                <div class="">{{ $genre_odin_janr->login }}</div>
                            </td>
                            <td>
                                <div class="">{{ $genre_odin_janr->email }}</div>
                            </td>
                            <td>
                                <div class="">{{ $genre_odin_janr->status }}</div>
                            </td>
                            <td>
                                <div class="">{{ $genre_odin_janr->created_at }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
