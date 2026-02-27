<x-layout>
    <x-slot:title>
        Edit {{ $project->name }}
    </x-slot:title>

    <div class="m-auto max-w-[80rem]">
        <div class="flex items-center mt-[4rem]">
            <h1 class="text-3xl mb-6">Edit {{ $project->name }}</h1>
        </div>

        <form action="/projects/{{ $project->id }}" method="POST" class="w-full">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <div class="mb-2">
                    <label class="label" for="project name">Name</label>
                </div>
                <input name="name" class="input input-bordered w-full max-w-86 @error('name') input-error @enderror" value="{{ old('name', $project->name) }}" type="text">
                @error('name')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <div class="mb-2">
                    <label for="project-description" class="label">Description</label>
                </div>
                <div class="form-control w-fill">
                    <textarea name="description" id="description" rows="7" class="textarea textarea-bordered w-full @error('description') input-error @enderror">{{ old('description', $project->description) }}</textarea>
                </div>
                @error('description')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <button class="btn" type="submit">Update</button>
        </form>
    </div>
</x-layout>