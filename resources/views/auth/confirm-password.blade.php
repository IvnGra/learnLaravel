@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold tracking-tight">Confirm password</h2>
                <p class="mt-2 text-base-content/70">This is a secure area</p>
            </div>

            <div class="card bg-base-100 shadow-xl border border-base-200">
                <div class="card-body">
                    <div class="alert alert-warning mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.996-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                        <span>{{ __('Please confirm your password to continue to this secure area.') }}</span>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
                        @csrf

                        <!-- Password -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-medium">Password</span>
                            </label>
                            <input type="password" name="password" placeholder="••••••••" 
                                   class="input input-bordered @error('password') input-error @enderror" 
                                   required autofocus autocomplete="current-password" />
                            @error('password')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-full mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Confirm Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
