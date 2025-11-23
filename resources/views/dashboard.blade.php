<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Welcome Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3.5M3 15.5v2a7.5 7.5 0 0015 0v-2M3 15.5l18 0"/>
                    </svg>
                    Welcome back!
                </h2>
                <p>{{ __("You're successfully logged in, ") }} <strong>{{ Auth::user()->name }}</strong>!</p>
                <div class="card-actions justify-end">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Quick Actions Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Quick Actions
                </h2>
                <div class="space-y-2">
                    @if(Route::has('posts.create'))
                    <a href="{{ route('posts.create') }}" class="btn btn-outline btn-sm w-full">Create New Post</a>
                    @endif
                    @if(Route::has('posts.index'))
                    <a href="{{ route('posts.index') }}" class="btn btn-outline btn-sm w-full">Manage Posts</a>
                    @endif
                    <a href="{{ route('home') }}" class="btn btn-outline btn-sm w-full">View Blog</a>
                </div>
            </div>
        </div>

        <!-- Account Info Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Account Info
                </h2>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-sm opacity-70">Email:</span>
                        <span class="text-sm">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-sm opacity-70">Member since:</span>
                        <span class="text-sm">{{ Auth::user()->created_at->format('M Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-sm opacity-70">Status:</span>
                        <div class="badge badge-success badge-sm">{{ Auth::user()->email_verified_at ? 'Verified' : 'Unverified' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="mt-8">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Recent Activity
                </h2>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <div class="badge badge-primary">Login</div>
                        <span class="text-sm">You logged in successfully</span>
                        <span class="text-xs opacity-60">{{ now()->format('M j, Y g:i A') }}</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="badge badge-info">Profile</div>
                        <span class="text-sm">Account created</span>
                        <span class="text-xs opacity-60">{{ Auth::user()->created_at->format('M j, Y g:i A') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
