@props(['name'=>'', 'title'=>null, 'image'=>null, 'headerBackground'=>'', 'bodyBackground'=>'#2b2c2c'])

<section class="container container_{{$name}}">
    <div class="container__background"></div>
    <div class="container__inside">
        <div class="container__header">
            @if (isset($title))
                <h2 class="container__title">{{$title}}</h2>
            @endif
            @if (isset($image))
                <div class="container__image">{{$image}}</div>
            @endif
        </div>
        <div class="container__body">
            {{$slot}}
        </div>
    </div>
</section>
