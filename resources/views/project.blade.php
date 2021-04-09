<x-layout name="project">
    <x-back-btn/>
    <x-section :title="$project->name" name="project">
        <div class="projects">
            <div class="project-page">
                @include('projects.'.$project->code)
                <x-links :links="$project->links"></x-links>
            </div>
        </div>
    </x-section>
</x-layout>
