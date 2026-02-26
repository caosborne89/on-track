<x-layout>
    <x-slot:title>
        Sign up
    </x-slot>
    
    <div class="flex min-h-[calc(100vh-4rem)] items-center justify-center">
        <div class="card bg-base-100 w-96 shadow-sm p-9">
            <div class="card-title">Sign up</div>
            <div class="card-body">
                <div class="text-center">
                    <p class="mb-3" >Register for a new account</p>
                </div>
                <form action="/register" method="POST">
                    @csrf
                    <label class="floating-label mb-6">
                        <input name="name" type="text" class="input validator mb-7" required placeholder="Name" />
                    </label>
                    @error('name')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                    @enderror
                    <label class="floating-label mb-6">
                        <input name="email" type="email" value="{{ old('email') }}" class="input input-bordered @error('email') input-error @enderror" required placeholder="Email" />
                    </label>
                    @error('email')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                    @enderror
                    <label class="floating-label mb-6">
                        <input name="password" type="password" class="input mb-7" placeholder="Password" />
                    </label>
                    
                    @error('password')
                    <div class="label mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                    @enderror
                    <input name="password_confirmation" type="password" class="input mb-7" placeholder="Confirm Password" />
                    <button type="submit" class="btn">
                        Create account
                    </button>
                </form>

                <div class="divider">OR</div>
                <div class="text-center">Already have an account? <a class="link" href="/">Sign in</a>.</div>
            </div>
        </div>
    </div>
</x-layout>
