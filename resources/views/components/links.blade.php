@if (sizeof($links) > 0)

<h2>Ссылки</h2>
<ul class="project-page__links">
    @foreach ($links as $link)
    <li class="project-page__link-item">
        @switch (strtolower($link->type))
            @case('demo')
            <a class="project-page__link" title="demo" href="{{$link->link}}"><i class="fas fa-play-circle"></i> DEMO</a>
            @break
            @case('github')
            <a class="project-page__link" title="github" href="{{$link->link}}"><i class="fab fa-github"></i> GITHUB</a>
            @break
        @endswitch
    </li>
    @endforeach
</ul>

@endif
