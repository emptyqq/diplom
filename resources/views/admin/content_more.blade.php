@extends('shablons.admin')

@section('scripts')
    <script>
        let list = document.getElementById("genres-list");
        document.getElementById("btn-add-genre").addEventListener("click", function() {
            let select = this.previousElementSibling;

            let repeat = false;
            document.querySelectorAll(".genre-item").forEach((item) => {
                if (item.dataset.id == select.value) repeat = true;
            })


            if (!select.value || repeat) return

            addItem(select.value, select.options[select.selectedIndex].text)
        })

        JSON.parse(list.dataset.genres).forEach((item) => {
            addItem(item.id, item.name)
        })

        function addItem(id, text) {
            let itemDiv = document.createElement("div");

            itemDiv.classList.add("me-3");
            itemDiv.classList.add("mb-2");
            itemDiv.classList.add("bg-white");
            itemDiv.classList.add("text-dark");
            itemDiv.classList.add("px-3");
            itemDiv.classList.add("py-2");
            itemDiv.classList.add("d-flex");
            itemDiv.classList.add("align-items-center");
            itemDiv.classList.add("rounded-3");
            itemDiv.classList.add("genre-item");
            itemDiv.dataset.id = id;
            list.prepend(itemDiv);

            let span = document.createElement("span");
            span.classList.add("me-2");
            span.textContent = text;
            itemDiv.append(span)

            let button = document.createElement("button");
            button.classList.add("btn-close");
            button.type = "button";
            button.addEventListener("click", function() {
                this.parentElement.remove();
            })

            itemDiv.append(button);

            let input = document.createElement("input");
            input.type = "hidden";
            input.value = id;
            input.name = "genres[]";
            itemDiv.append(input)
        }
    </script>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded p-2 mt-3">
            <h1 class="">Добавить контент</h1>
        </div>
        <div class="nav_menu_color rounded mt-1 p-2">
            <form method="POST" action="{{ route('edit_content') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $content->id }}">
                <div class="row p-3">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Название</label>
                            <input value="{{ $content->name }}" type="text" name="name" class="form-control"
                                id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">&nbsp;</label>
                            <input value="{{ $content->rating }}" type="text" name="rating" class="form-control"
                                id="exampleFormControlInput1" placeholder="Рейтинг">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">&nbsp;</label>
                            <input value="{{ $content->age }}" type="text" name="age" class="form-control"
                                id="exampleFormControlInput1" placeholder="Возраст">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">&nbsp;</label>
                            <input value="{{ $content->country }}" type="text" name="country" class="form-control"
                                id="exampleFormControlInput1" placeholder="Страна">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Название на английском</label>
                            <input value="{{ $content->name_eng }}" type="text" name="name_eng" class="form-control"
                                id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Изменить изображение</label>
                            <input name="img" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Категория</label>
                            <div class="input-group">
                                <select class="form-select" name="type" aria-label="Default select example">
                                    <option value="" selected></option>
                                    @foreach ($types as $type)
                                        <option @if ($type->id == $content->type) selected @endif
                                            value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
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
                                    <option selected></option>
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                                <button id="btn-add-genre" type="button" class="btn btn-danger">Добавить</button>
                            </div>
                        </div>
                        <div id="genres-list" class="d-flex flex-wrap mb-4" data-genres="{{ $content->genres }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $content->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="video" class="form-label">Добавить видео</label>
                            <input name="video" class="form-control" type="file" id="video">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Продюсер</label>
                        <input value="{{ $content->producer }}" type="text" name="producer" class="form-control"
                            id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Длительность</label>
                        <input value="{{ $content->duration }}" type="text" name="duration" class="form-control"
                            id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Год выхода</label>
                        <input value="{{ $content->published }}" type="text" name="published" class="form-control"
                            id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ссылка на Трейлер</label>
                            <input value="{{ $content->trailers }}" class="form-control" name="trailers" type="text"
                                id="formFile">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6>Статус</h6>
                        <div class="d-flex">
                            <div class="form-check">
                                <input @if ($content->visibility) checked @endif value="1"
                                    class="form-check-input" type="radio" name="visibility" id="flexRadioDefault2"
                                    checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Сделать активным
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input @if (!$content->visibility) checked @endif value="0"
                                    class="form-check-input" type="radio" name="visibility" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Скрыть
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <button class="btn btn-danger">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
