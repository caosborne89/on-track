<x-layout>
    <x-slot:title>
        New ticket
    </x-slot:title>

    <div class="m-auto max-w-[80rem]">
        <div class="flex items-center mt-[4rem]">
            <h1 class="text-3xl">New ticket</h1>
        </div>
        <form action="/projects/{{ $project->id }}/tickets" method="POST" class="w-full">
            @csrf

            <div class="my-[2rem]">
                <div>
                    <div class="sm:col-span-3">
                    <label for="assignee" class="label">Assignee</label>
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
                @error('assignee')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div class="my-[2rem]">
                <div>
                    <div class="sm:col-span-3">
                    <label for="status" class="label">Status</label>
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
                 @error('status')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="my-[2rem]">
                <div class="mb-2">
                    <label class="label" for="ticket subject">Subject</label>
                </div>
                <input name="subject" class="input input-bordered w-full max-w-175" type="text" value="{{ old('subject') }}">

                @error('subject')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>
   
            <div class="my-[2rem]">
                <div class="mb-2">
                    <label class="label"for="ticket-description">Description</label>
                </div>
                <div>
                    <textarea name="description" id="description" cols="30" rows="8" class="textarea textarea-bordered w-full max-w-175">{{old('description')}}</textarea>
                </div>
                @error('description')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <button class="btn mr-[1rem]" type="submit">Save</button>
            <a href="/projects/{{ $project->id }}" class="btn">Cancel</a>
        </form>
    </div>
</x-layout>