@extends('shablons.admin')

@section('title')
    ewqewq
@endsection

@section('scripts')
    <script>
        document.querySelectorAll(".btn-remove").forEach((btn) => {
            btn.addEventListener("click", function() {
                let item = JSON.parse(this.dataset.item);
                document.getElementById("remove-id").value = item.id;
                document.getElementById("remove-text").textContent = `#${item.id} | ${item.name}`;
            })
        })

        document.querySelectorAll(".btn-edit").forEach((btn) => {
            btn.addEventListener("click", function() {
                let item = JSON.parse(this.dataset.item);
                document.getElementById("edit-id").value = item.id;
                document.getElementById("edit-text").value = item.name;
            })
        })
    </script>
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
                        <th scope="col">икона</th>
                        <th scope="col">Действия</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($types as $type)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="ms-3">{{ $type->name }}</div>
                            </td>
                            <td><i class="bi {{ $type->icon }} text-white"></i></td>
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
                                            <button class="dropdown-item btn-remove" data-item="{{ $type }}"
                                                data-bs-toggle="modal"data-bs-target="#remove-modal">Удалить</button>
                                        </li>
                                        {{-- <li>
                                            <hr class="dropdown-divider">
                                        </li> --}}
                                        <li>
                                            <button class="dropdown-item btn-edit" data-item="{{ $type }}"
                                                data-bs-toggle="modal"data-bs-target="#modal-edit">Изменить</button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal EDIT -->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Изменение жанра</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('edit_category') }}" method="POST">
                    @csrf
                    <input type="hidden" id="edit-id" name="id">
                    <div class="modal-body text-dark" style="">
                        <input class="form-control" name="name" type="text" id="edit-text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal REMOVE -->
    <div class="modal fade" id="remove-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Удалит контент</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('remove_category') }}" method="POST">
                    @csrf
                    <input type="hidden" id="remove-id" name="id">
                    <div class="modal-body text-dark">
                        <div>Вы хотите удалить жанр:</div>
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
