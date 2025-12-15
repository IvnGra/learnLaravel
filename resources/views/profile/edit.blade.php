@extends('partials.layout')
@section('title', 'Profile')
@section('content')
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-4">
                <div class="avatar placeholder">
                    <div class="bg-primary text-primary-content rounded-full w-16">
                        <span class="text-2xl">{{ substr(Auth::user()->name, 0, 1) }}</span>
                    </div>
                </div>
                <div>
                    <h1 class="text-4xl font-bold">{{ Auth::user()->name }}</h1>
                    <p class="text-base-content/70">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <p class="text-base-content/70">Manage your account information and security settings</p>
        </div>

        <!-- Profile Information Card -->
        <div class="card bg-base-100 shadow-xl border border-base-200 mb-6">
            <div class="card-body">
                <h2 class="card-title text-2xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Profile Information
                </h2>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password Card -->
        <div class="card bg-base-100 shadow-xl border border-base-200 mb-6">
            <div class="card-body">
                <h2 class="card-title text-2xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Update Password
                </h2>
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete Account Card -->
        <div class="card bg-error/10 border border-error/20 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-2xl mb-6 text-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Danger Zone
                </h2>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection