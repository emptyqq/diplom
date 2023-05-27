@extends('shablons.main')

@section('title')
    Профиль
@endsection

@section('main')
    <div class="d-flex">
        <div class="p-3">
            <img title="нажмите, чтобы изменить фотографию" data-bs-toggle="tooltip"  data-bs-placement="right" data-bs-custom-class="bg-dark"
                src="https://i.pinimg.com/564x/60/49/41/60494114ea0e37994ff54727975a9a85.jpg"
                class="img-thumbnail float-start rounded-circle" width="200" height="200" alt="...">
        </div>
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
            <button class="nav-link text-white" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">Понравились</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Не понравились</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white btn-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Сейчас смотрю</button>
        </li>
    </ul>
    <div class="tab-content mx-3" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">аниме</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">аниме 2   </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">аниме 3</div>
    </div>
@endsection