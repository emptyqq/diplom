@extends('shablons.admin')

@section('title')
    Админ
@endsection

@section('scripts')
    <script>
        document.querySelectorAll(".btn-remove").forEach((btn) => {
            btn.addEventListener("click", function() {
                let content = JSON.parse(this.dataset.content);
                console.log(content);
                document.getElementById("remove-id").value = content.id;
                document.getElementById("remove-text").textContent = `#${content.id} | ${content.name}`;
            })
        })
    </script>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="nav_menu_color rounded d-flex p-2 mt-3">
            <h1 class="">Контент</h1>
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
                    @foreach ($contents as $contents_one_item)
                        <tr>
                            <th scope="row">{{ $contents_one_item->id }}</th>
                            <td>
                                <div class="ms-3">{{ $contents_one_item->name }}</div>
                            </td>
                            <td>{{ $contents_one_item->type }}</td>
                            <td>{{ $contents_one_item->updated_at }}</td>
                            <td>{{$contents_one_item->visibility ? 'Опубликовано' : 'скрыто'}}</td>
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
                                        <li>
                                            <button class="dropdown-item btn-remove" data-content="{{ $contents_one_item }}"
                                                data-bs-toggle="modal"data-bs-target="#remove-modal">Удалить</button>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('content_more', ['content' => $contents_one_item->id]) }}">Подробнее</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="remove-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Удалит контент</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('remove_content') }}" method="POST">
                    @csrf
                    <input type="hidden" id="remove-id" name="id">
                    <div class="modal-body text-dark">
                        <div>Вы хотите удалить контент:</div>
                        <span id="remove-text" class="fw-semibold">Подземелья и драконы: Честь среди воров '#9'</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        <button type="submit" class="btn btn-primary">Удалить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
