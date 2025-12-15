@extends('partials.layout')
@section('title', 'Login')
@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold tracking-tight">Welcome back</h2>
                <p class="mt-2 text-base-content/70">Sign in to your account to continue</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div role="alert" class="alert alert-success mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <div class="card bg-base-100 shadow-xl border border-base-200">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Email Address</span>
                            </label>
                            <input type="email" name="email" placeholder="you@example.com" 
                                   class="input input-bordered @error('email') input-error @enderror" 
                                   value="{{ old('email') }}" required autofocus autocomplete="username" />
                            @error('email')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Password</span>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="label-text-alt link link-hover">
                                        Forgot password?
                                    </a>
                                @endif
                            </label>
                            <input type="password" name="password" placeholder="••••••••" 
                                   class="input input-bordered @error('password') input-error @enderror" 
                                   required autocomplete="current-password" />
                            @error('password')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-control">
                            <label class="label cursor-pointer justify-start gap-3">
                                <input name="remember" type="checkbox" class="checkbox checkbox-sm" />
                                <span class="label-text">Remember me</span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-full mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Sign in
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sign up link -->
            <p class="mt-6 text-center text-sm text-base-content/70">
                Don't have an account? 
                <a href="{{ route('register') }}" class="link link-primary font-medium">
                    Sign up here
                </a>
            </p>
        </div>
    </div>
@endsection