@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold tracking-tight">Reset your password</h2>
                <p class="mt-2 text-base-content/70">Enter your new password below</p>
            </div>

            <div class="card bg-base-100 shadow-xl border border-base-200">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Email Address</span>
                            </label>
                            <input type="email" name="email" placeholder="you@example.com" 
                                   class="input input-bordered @error('email') input-error @enderror" 
                                   value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                            @error('email')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">New Password</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
