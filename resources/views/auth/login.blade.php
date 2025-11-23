@extends('partials.layout')
@section('title', 'Login')
@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-center text-2xl font-bold mb-6">Welcome back!</h2>
                
                <!-- Session Status -->
                @if (session('status'))
                    <div role="alert" class="alert alert-success mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered @error('email') input-error @enderror" 
                               value="{{ old('email') }}" placeholder="Enter your email" required autofocus autocomplete="username" />
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
                               placeholder="Enter your password" required autocomplete="current-password" />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-control">
                        <label class="label cursor-pointer justify-start space-x-2">
                            <input name="remember" type="checkbox" class="checkbox checkbox-primary" />
                            <span class="label-text">Remember me</span>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-full">Sign In</button>
                    </div>

                    <div class="text-center space-y-2">
                        @if (Route::has('password.request'))
                            <a class="link link-primary text-sm" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                        <div class="text-sm">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="link link-primary">Register here</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection