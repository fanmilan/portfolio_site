<div class="project-card">
    <!--
    <div class="project-card__image-wrap">
        <div class="project-card__image">
            @if (isset($project->cover))
                <img src="{{$project->cover->thumbnail(null, 200)}}" alt="Обложка"/>
            @endif
        </div>
    </div>
    -->
    <div class="project-card__body">
        <div class="project-card__links">
            <a class="project-card__link project-card__link_github" title="github"><i class="fab fa-github"></i></a>
            <a class="project-card__link project-card__link_demo" title="demo"><i class="fas fa-play-circle"></i></a>
        </div>
        <div class="project-card__tags tags">
            @foreach ($project->tags as $tag)
                <div class="tags__item">{{$tag->name}}</div>
            @endforeach
        </div>
        <h2 class="project-card__title">{{ $project->name }}</h2>
        <div class="project-card__description">{{$project->description}}</div>
        <!--
        <div class="project-card__links">
            <a class="project-card__link"></a>
        </div>
        -->
        <a class="project-card__more-btn" href="{{route('project', $project->id)}}">Перейти</a>
    </div>
</div>
