<div class="projects">
    @foreach ($projects as $project)
        <x-project-card :project="$project"></x-project-card>
    @endforeach
</div>
