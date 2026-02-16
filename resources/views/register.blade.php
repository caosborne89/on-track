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
                <input type="email" class="input validator" required placeholder="Email" />
                <div class="validator-hint mt-0">Enter valid email address</div>
                <input type="password" class="input mb-7" placeholder="Password" />
                <input type="password" class="input mb-7" placeholder="Confirm Password" />
                <button class="btn">
                    Create account
                </button>
                <div class="divider">OR</div>
                <div class="text-center">Already have an account? <a class="link" href="/">Sign in</a>.</div>
            </div>
        </div>
    </div>
</x-layout>
