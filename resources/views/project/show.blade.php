<x-layout>
    <x-slot:title>
        {{ $project->name }}
    </x-slot>
    <div>
        <div class="flex items-center mt-[3rem]"">
            <h1 class="text-3xl mr-[1rem]">{{$project->name}}</h1>
            <a href="/projects/{{ $project->id }}/edit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </a>
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