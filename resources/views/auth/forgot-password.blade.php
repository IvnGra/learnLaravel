@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold tracking-tight">Forgot your password?</h2>
                <p class="mt-2 text-base-content/70">No worries, we'll send you reset instructions</p>
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
                    <p class="text-sm text-base-content/70 mb-6">
                        {{ __('Enter your email address and we will send you a password reset link.') }}
                    </p>

                    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Email Address</span>
                            </label>
                            <input type="email" name="email" placeholder="you@example.com" 
                                   class="input input-bordered @error('email') input-error @enderror" 
                                   value="{{ old('email') }}" required autofocus autocomplete="email" />
                            @error('email')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-full mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Send Reset Link
                        </button>
                    </form>
                </div>
            </div>

            <!-- Back to login -->
            <p class="mt-6 text-center text-sm text-base-content/70">
                Remember your password? 
                <a href="{{ route('login') }}" class="link link-primary font-medium">
                    Sign in
                </a>
            </p>
        </div>
    </div>
@endsection
