<x-layout>
    <x-slot:title>
        New ticket
    </x-slot:title>

    <div class="m-auto max-w-[80rem]">
        <div class="flex items-center mt-[4rem]">
            <h1 class="text-3xl">New ticket</h1>
        </div>
        <form action="/projects/{{ $project->id }}/tickets/store" method="POST" class="w-full">
            @csrf

            <div class="my-[2rem]">
                <div>
                    <div class="sm:col-span-3">
                    <label for="country" class="block">Assignee</label>
                    <div class="mt-2 grid grid-cols-1 rounded-md outline-1 -outline-offset-1 outline-gray-300 max-w-45">
                        <select id="assignee" name="assignee" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                        <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                    </div>
                    </div>
                </div>
            </div>

            <div class="my-[2rem]">
                <div>
                    <div class="sm:col-span-3">
                    <label for="status" class="block">Status</label>
                    <div class="mt-2 grid grid-cols-1 rounded-md outline-1 -outline-offset-1 outline-gray-300 max-w-45">
                        <select id="status" name="status" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                            <option value="todo">To Do</option>
                            <option value="doing">Doing</option>
                            <option value="done">Done</option>
                        </select>
                        <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                        <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                    </div>
                    </div>
                </div>
            </div>
            <div class="my-[2rem]">
                <div>
                    <label class="block" for="ticket subject">Subject</label>
                </div>
                <div class="flex items-center rounded-md outline-1 -outline-offset-1 outline-gray-300 max-w-86">
                    <input name="subject" class="block grow bg-white text-base" type="text">
                </div>
            </div>
            <div class="my-[2rem]">
                <div>
                    <label class="block"for="ticket-description">Description</label>
                </div>
                <div>
                    <textarea name="description" id="description" cols="30" rows="8" class="block w-full rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 max-w-175"></textarea>
                </div>
            </div>
            
            <button class="btn mr-[1rem]" type="submit">Save</button>
            <a href="/projects/{{ $project->id }}" class="btn">Cancel</a>
        </form>
    </div>
</x-layout>