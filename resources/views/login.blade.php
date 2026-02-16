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
                <input type="email" class="input validator" required placeholder="Email" />
                <div class="validator-hint mt-0">Enter valid email address</div>
                <input type="password" class="input mb-7" placeholder="Password" />
                
                <button class="btn">
                    Sign In
                </button>
                <div class="divider">OR</div>
                <div class="text-center">Don't have an account? <a class="link" href="/signup">Sign up</a>.</div>
            </div>
        </div>
    </div>
</x-layout>
