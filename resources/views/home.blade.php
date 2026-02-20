<x-layout>
    <x-slot:title>
        Home
    </x-slot>

    <div class="m-auto max-w-[80rem]">
        <div class="flex items-center mt-[4rem]">
            <h1 class="text-3xl">Projects</h1>
            <a href="/projects/create" class="btn ml-auto">Create new project</a>
        </div>
        <div class="mt-[4rem]">
            @foreach($projects as $project)
                <div class="card w-96 bg-base-100 card-md shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">{{ $project->name }}</h2>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
