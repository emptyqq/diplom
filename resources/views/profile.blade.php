@extends('shablons.main')

@section('title')
    Профиль
@endsection

@section('scripts')
    <script>
        document.getElementById("avatar").addEventListener("change", function() {
            this.parentElement.submit()
        })
    </script>
@endsection

@section('main')
    <div class="d-flex">
        <form action="{{ route('core.user.edit.avatar') }}" method="POST" class="p-3 d-flex align-items-center"
            enctype="multipart/form-data">
            @csrf
            <input type="file" name="avatar" id="avatar" class="d-none">
            <label for="avatar" class="" title="нажмите, чтобы изменить фотографию" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-custom-class="bg-dark">
                @if (Auth::user()->img)
                    <div class="avatar"
                        style="width: 200px; height: 200px; background-image: url({{ asset(Auth::user()->img) }})">
                    </div>
                @else
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                @endif
            </label>
        </form>
        <div class="row">
            <div class="mt-5 ms-3">
                <h1 class="fw-bold mb-3">{{ Auth::user()->login }}</h1>
                <div class="d-flex">
                    <p class="text-secondary me-2">Email</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="d-flex">
                    <p class="text-secondary me-2">Регистрация</p>
                    <p>{{ Auth::user()->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs mx-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">Понравившиеся</button>
        </li>
        {{-- <li class="nav-item" role="presentation">
            <button class="nav-link text-white" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">Не понравившиеся</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white btn-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                type="button" role="tab" aria-controls="contact" aria-selected="false">Смотрю сейчас</button>
        </li> --}}
    </ul>
    <div class="tab-content mx-3" id="myTabContent">

        <div class="tab-pane mt-3 active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row gy-4">
                @forelse ($contents as $content)
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card card_body_color rounded-3">
                            <img src="{{ asset($content->img) }}" class="card-img-top" alt="...">
                            <div class="card-body card_body_color text-white">
                                <a class="text-decoration-none text-white"
                                    href="{{ route('videos', ['content' => $content->id]) }}">
                                    <p class="card-title text-center text_ellipsis">{{ $content->name }}</p>
                                </a>
                                <p class="card-text text-center text_ellipsis text-secondary">{{ $content->name_eng }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center display-5 text-secondary p-4">Ничего не найдено</p>
                @endforelse
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">аниме 2</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">аниме 3</div>
    </div>
@endsection
