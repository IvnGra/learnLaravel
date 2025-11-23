@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-center text-2xl font-bold mb-6">Create Account</h2>
                
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Full Name</span>
                        </label>
                        <input type="text" name="name" class="input input-bordered @error('name') input-error @enderror" 
                               value="{{ old('name') }}" placeholder="Enter your full name" required autofocus autocomplete="name" />
                        @error('name')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered @error('email') input-error @enderror" 
                               value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="username" />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" class="input input-bordered @error('password') input-error @enderror" 
                               placeholder="Create a password" required autocomplete="new-password" />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input type="password" name="password_confirmation" class="input input-bordered @error('password_confirmation') input-error @enderror" 
                               placeholder="Confirm your password" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-full">Create Account</button>
                    </div>

                    <div class="text-center">
                        <div class="text-sm">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="link link-primary">Sign in here</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection