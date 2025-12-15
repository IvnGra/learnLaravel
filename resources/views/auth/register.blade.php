@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold tracking-tight">Create your account</h2>
                <p class="mt-2 text-base-content/70">Join us today and start exploring</p>
            </div>

            <div class="card bg-base-100 shadow-xl border border-base-200">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf

                        <!-- Name -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Full Name</span>
                            </label>
                            <input type="text" name="name" placeholder="John Doe" 
                                   class="input input-bordered @error('name') input-error @enderror" 
                                   value="{{ old('name') }}" required autofocus autocomplete="name" />
                            @error('name')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Email Address</span>
                            </label>
                            <input type="email" name="email" placeholder="you@example.com" 
                                   class="input input-bordered @error('email') input-error @enderror" 
                                   value="{{ old('email') }}" required autocomplete="username" />
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
                            </label>
                            <input type="password" name="password" placeholder="••••••••" 
                                   class="input input-bordered @error('password') input-error @enderror" 
                                   required autocomplete="new-password" />
                            @error('password')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Confirm Password</span>
                            </label>
                            <input type="password" name="password_confirmation" placeholder="••••••••" 
                                   class="input input-bordered @error('password_confirmation') input-error @enderror" 
                                   required autocomplete="new-password" />
                            @error('password_confirmation')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-full mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            Create Account
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sign in link -->
            <p class="mt-6 text-center text-sm text-base-content/70">
                Already have an account? 
                <a href="{{ route('login') }}" class="link link-primary font-medium">
                    Sign in here
                </a>
            </p>
        </div>
    </div>
@endsection