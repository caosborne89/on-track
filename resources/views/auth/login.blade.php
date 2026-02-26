<x-layout>
    <x-slot:title>
        Sign in
    </x-slot>
    
    <div class="flex min-h-[calc(100vh-4rem)] items-center justify-center">
        <div class="card bg-base-100 w-96 shadow-sm p-9">
            <div class="card-title">Sign in</div>
            <div class="card-body">
                <div class="text-center">
                    <p class="mb-3" >Enter your credentials to continue to your account</p>
                </div>
                <form action="/login" method="POST">
                    @csrf

                    <label class="floating-label mb-6">
                        <input name="email" type="email" class="input validator" required placeholder="Email" value="{{ old('email') }}"/>
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
                        <span class="label-text-alt text-error whitespace-normal break-words">{{ $message }}</span>
                    </div>
                    @enderror
                    <div class="grid justify-items-end">
                        <button type="submit" class="btn">
                            Sign In
                        </button>
                    </div>
                    
                </form>
                
                <div class="divider">OR</div>
                <div class="text-center">Don't have an account? <a class="link" href="/register">Sign up</a>.</div>
            </div>
        </div>
    </div>
</x-layout>
