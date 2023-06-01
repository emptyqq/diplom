@extends('shablons.admin')

@section('title')
    ewqewq
@endsection

@section('main')
@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded d-flex p-2 mt-3">
            <h1 class="">Жанры</h1>
        </div>
        <div class="nav_menu_color rounded mt-1 p-2">
            <form method="POST" action="{{route('create_genre')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mx-auto">
                    <div class="col-lg">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Название жанра</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="">
                        </div>
                    </div>
                    <div class="px-3 pb-3">
                        <h6>Статус</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Сделать активным
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Скрыть
                            </label>
                        </div>
                    </div>

                </div>
                <div class="p-3">
                    <button class="btn btn-danger">
                        Добавить
                    </button>
                    <button class="btn btn-dark">
                        Отменить
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
