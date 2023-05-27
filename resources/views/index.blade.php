<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>

<body>
    <div class="background" style="background-image: url({{ asset('public/storage/img/landing.jpg') }});">
        <div class="overplay" style="    background-image:url({{ asset('public/storage/img/overlay.png') }});"></div>
    </div>
    <div class="row justify-content-center">
        <div class="text-center position-absolute col-6">
            <p class="center_text fw-bold">ОГРОМНЫЙ ВЫБОР ФИЛЬМОВ И СЕРИАЛОВ</p>
            <a href="{{route('login')}}" class="btn btn-dark btn-lg">Войти</a>
            <a href="{{route('registration')}}" class="btn btn-light btn-lg">Регистрация</a>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
