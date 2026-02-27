<x-layout>
    <x-slot:title>
        Home
    </x-slot>


    <div class="flex items-center mt-[4rem] gap-[2rem]">
        <h1 class="text-3xl">Projects</h1>
        <a href="/projects/create" class="btn ml-auto">Create new project</a>
    </div>
    <div class="flex flex-row flex-wrap mt-[4rem] gap-[2rem]">
        @foreach($projects as $project)
        <div class="card min-w-65 max-w-96 bg-base-100 card-md shadow-sm">
            <a href="/projects/{{ $project->id }}">
                <div class="card-body">
                    <h2 class="card-title">{{ $project->name }}</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>

</x-layout>
