<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Проект</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="antialiased">
    <div class="container">
        <div class="container__back"><a href="/">Назад</a></div>
        <h1 class="container__title">{{$project->name}}</h1>
        <div class="container__body">
            <div class="project-page">
                @include('projects.'.$project->code)
                <h2>Ссылки</h2>
                <ul class="project-page__links">
                    <li class="project-page__link-item">
                        <a>Демо</a>
                    </li>
                    <li class="project-page__link-item">
                        <a>GitHub</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="footer__inside">
            <h2>Связь со мной</h2>
            <div class="contacts">
                <div class="contacts__info">
                    <dl>
                        <dt>Электронный адрес:</dt>
                        <dd>fanmilan007@gmail.com</dd>
                        <dt>Телефон:</dt>
                        <dd>+7 (911) 813-61-83</dd>
                    </dl>
                    <div class="contacts__social">
                        <a class="contacts__social-link" href="https://vk.com/fanmilan">VK</a>
                        <a class="contacts__social-link" href="https://github.com">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
