<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Портфолио</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="antialiased">
<header class="header">
    <div class="personal">
        <div class="personal__image">

        </div>
        <div class="personal__info">
            <div class="personal__header">
                <div class="personal__name">Пищулин Владимир</div>
                <div class="personal__work">Fullstack - разработчик</div>
            </div>
            <div class="personal__body">
                <ul>
                    <li>Возраст: 27</li>
                    <li>Телефон: +7 (911) 813-61-83</li>
                    <li>Email: fanmilan007@gmail.com</li>
                    <li>Место проживания: Россия, Санкт-Петербург</li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <h2 class="container__title">Обо мне</h2>
    <div class="container__body">
        <div class="about-me">
            Я - Веб разработчик. Опыт в этой области около 3 лет.
        </div>
        <h3 class="container__second-title">Образование</h3>
        <div class="education">
            <div class="education__title">Санкт-Петербургский Национальный Исследовательский Университет Информационных
                технологий, Механики и Оптики
            </div>
            <div class="education__date">2012 - 2016</div>
            <div class="education__speciality">Бакалавр</div>
            <div class="education__speciality">09.03.02 Информационные системы и технологии</div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="container__title">Мои работы</h2>
    <div class="projects">
        @foreach($projects as $project)
            @include('blocks.project-card')
        @endforeach
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
