@extends('shablons.admin')

@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded p-2 mt-3">
            <h1 class="">Добавить контент</h1>
        </div>
        <div class="nav_menu_color rounded mt-1 p-2">
            <form method="POST" action="{{route('create_content')}}" enctype="multipart/form-data">
                @csrf
                <div class="row p-3">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Название</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">&nbsp;</label>
                            <input type="text" name="rating" class="form-control" id="exampleFormControlInput1" placeholder="Рейтинг">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">&nbsp;</label>
                            <input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="Возраст">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">&nbsp;</label>
                            <input type="text" name="country" class="form-control" id="exampleFormControlInput1" placeholder="Страна">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Название на английском</label>
                            <input type="text" name="name_eng" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Загрузить изображение</label>
                            <input name="img" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Категория</label>
                            <div class="input-group">
                                <select class="form-select" name="type" aria-label="Default select example">
                                    <option selected=""></option>
                                    <option value="3">eqewq</option>
                                    <option value="4">eqwewq</option>
                                    <option value="5">ewqewq</option>
                                </select>
                                <button type="button" class="btn btn-danger">Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="tag" class="form-label">Жанры</label>
                            <div class="input-group">
                                <select class="form-select" name="tag" aria-label="Default select example">
                                    <option selected=""></option>
                                    <option value="3">eqewq</option>
                                    <option value="4">eqwewq</option>
                                    <option value="5">ewqewq</option>
                                </select>
                                <button type="button" class="btn btn-danger">Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Продюсер</label>
                        <input type="text" name="producer" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Длительность</label>
                        <input type="text" name="duration" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Год выхода</label>
                        <input type="text" name="published" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ссылка на Трейлер</label>
                            <input class="form-control" name="trailers" type="text" id="formFile">
                          </div>
                    </div>
                    <button class="btn btn-danger" >
                        добавить
                    </button>
                    



                </div>
            </form>
        </div>
    </div>
@endsection
