<x-layout>
    <x-slot:title>
        {{ $project->name }}
    </x-slot>

    <div class="m-auto max-w-[80rem]">
        <div class="flex items-center mt-[4rem]">
            <h1 class="text-3xl">{{$project->name}}</h1>
            <a href="/projects/{{ $project->id }}/tickets/create" class="btn ml-auto">New ticket</a>
        </div>
        <div class="mt-[4rem]">
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>Issue Id</th>
                        <th>Subject</th>
                        <th>Assignee</th>
                        <th>Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                     @foreach($tickets as $ticket)
                            <tr class="hover:bg-gray-100">
                                <th>{{ $ticket->id }}</th>
                                <td><a class="underline" href="/projects/{{ $project->id }}/tickets/{{ $ticket->id }}">{{ $ticket->subject }}</a></td>
                                <td>{{ $ticket->assignee->name }}</td>
                                <td>{{ $ticket->updated_at }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>