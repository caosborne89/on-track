<x-layout>
    <x-slot:title>
        New project
    </x-slot:title>

    <div class="m-auto max-w-[80rem]">
        <div class="flex items-center mt-[4rem]">
            <h1 class="text-3xl">New project</h1>
        </div>

        <form action="/projects/store" method="POST" class="w-full">
            @csrf

            <div>
                <div>
                    <label class="block" for="project name">Name</label>
                </div>
                <div class="flex items-center rounded-md outline-1 -outline-offset-1 outline-gray-300 max-w-86">
                    <input name="name" class="block grow bg-white text-base" type="text">
                </div>
            </div>
            <div>
                <div>
                    <label for="project-description">Description</label>
                </div>
                <div>
                    <textarea name="description" id="description" cols="30" rows="3" class="block w-full rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 max-w-175"></textarea>
                </div>
            </div>
            <button class="btn" type="submit">Save</button>
        </form>
    </div>
</x-layout>