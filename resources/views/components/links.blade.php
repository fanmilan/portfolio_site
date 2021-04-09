@if ($links)

<h2>Ссылки</h2>
<ul class="project-page__links">
    @foreach ($links as $link)
    <li class="project-page__link-item">
        <a href="{{$link->link}}">{{$link->type}}</a>
    </li>
    @endforeach
</ul>

@endif
