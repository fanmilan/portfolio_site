<x-layout name="home">
    <x-section>
        <x-slot name="image">
            <div class="avatar"></div>
        </x-slot>
        <div class="personal">
            <div class="personal__header">
                <h1 class="personal__name">Пищулин Владимир</h1>
                <div class="personal__work">Fullstack - разработчик</div>
            </div>
            <x-contacts/>
        </div>
    </x-section>

    <x-section title="Обо мне" name="about">
        <p>Занимаюсь веб разработкой около 4 лет. С июля 2016 года работаю с галерей "Мансарда Художников" в качестве Fullstack - разработчика.</p>
        <p>В мои обязанности входили: поддержка сайта, создание нового функционала сайта. Работал один, без команды.</p>
        <p>Хочу развиваться дальше и попробовать поработать с командой. Есть небольшой опыт работы с: React, Laravel, SCSS.</p>
    </x-section>
    <x-section title="Образование" name="education">
        <div class="education">
            <div class="education__title">Санкт-Петербургский Национальный Исследовательский Университет Информационных
                технологий, Механики и Оптики
            </div>
            <div class="education__date">2012 - 2016</div>
            <div class="education__speciality">Бакалавр</div>
            <div class="education__speciality">09.03.02 Информационные системы и технологии</div>
        </div>
    </x-section>
    <x-section title="Навыки" name="skills">
        <x-skills>
            <x-skill name="HTML">
                <x-slot name="icon">
                    <i class="fab fa-html5"></i>
                </x-slot>
            </x-skill>
            <x-skill name="CSS">
                <x-slot name="icon">
                    <i class="fab fa-css3-alt"></i>
                </x-slot>
            </x-skill>

            <x-skill name="JavaScript">
                <x-slot name="icon">
                    <i class="fab fa-js"></i>
                </x-slot>
            </x-skill>

            <x-skill name="jQuery">
                <x-slot name="icon">
                    <span class="icon-jquery"></span>
                </x-slot>
            </x-skill>

            <x-skill name="React">
                <x-slot name="icon">
                    <i class="fab fa-react"></i>
                </x-slot>
            </x-skill>

            <x-skill name="PHP">
                <x-slot name="icon">
                    <i class="fab fa-php"></i>
                </x-slot>
            </x-skill>

            <x-skill name="Laravel">
                <x-slot name="icon">
                    <i class="fab fa-laravel"></i>
                </x-slot>
            </x-skill>

            <x-skill name="MySQL">
                <x-slot name="icon">
                    <span class="icon-mysql"></span>
                </x-slot>
            </x-skill>
        </x-skills>
    </x-section>
    <x-section title="Работы" name="projects">
        <div class="projects">
            @foreach($projects as $project)
                <x-project-card :project="$project"></x-project-card>
            @endforeach
            <div class="projects__show-all">
                <a class="projects__link" href="/projects">Посмотреть все</a>
            </div>
        </div>
    </x-section>
</x-layout>
