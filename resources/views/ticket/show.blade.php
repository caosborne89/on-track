<x-layout>
    <x-slot:title>
        #{{ $ticket->id }}: {{ $ticket->subject }}
    </x-slot>

    <div class="m-auto max-w-[80rem]">
        <div class="mt-[2rem]">
            <a class="text-xl underline" href="/projects/{{ $project->id }}">{{ $project->name }}</a>
        </div>
        <div class="mt-[2rem] mb-[1rem]">
            <h1 class="text-3xl">Issue #{{ $ticket->id }}</h1>
        </div>
        <h2 class="text-2xl">{{ $ticket->subject }}</h2>
        <div class="flex flex-row gap-[1rem] mb-[3rem]">
            <p>Created by {{ $ticket->author->name }} on {{ $ticket->created_at }}</p>
            <p>Updated on {{ $ticket->updated_at }}</p>
        </div>

        <div class="mb-[2rem]">
            <label for="" class="text-lg font-bold">Assignee</label>
            <p>{{ $ticket->assignee->name }}</p>
        </div>
        <div class="mb-[2rem]">
            <label for="" class="text-lg font-bold">Status</label>
            <p>{{ $ticket->statusDisplayVal() }}</p>
        </div>
        <div class="mb-[2rem]">
            <label for="" class="text-lg font-bold"> Description</label>
            <p>{{ $ticket->description }}</p>
        </div>
        <div class="mt-[3rem]">
            <a href="#" class="btn ml-auto">Edit</a>
        </div>
    </div>
</x-layout>