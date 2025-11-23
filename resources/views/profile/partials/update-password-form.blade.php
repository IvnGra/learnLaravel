<section>
    <p class="text-base-content/70 mb-6">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="form-control">
            <label class="label">
                <span class="label-text font-medium">Current Password</span>
            </label>
            <input type="password" name="current_password" class="input input-bordered @error('current_password', 'updatePassword') input-error @enderror" 
                   autocomplete="current-password" />
            @error('current_password', 'updatePassword')
                <label class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </label>
            @enderror
        </div>

        <!-- New Password -->
        <div class="form-control">
            <label class="label">
                <span class="label-text font-medium">New Password</span>
            </label>
            <input type="password" name="password" class="input input-bordered @error('password', 'updatePassword') input-error @enderror" 
                   autocomplete="new-password" />
            @error('password', 'updatePassword')
                <label class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </label>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-control">
            <label class="label">
                <span class="label-text font-medium">Confirm New Password</span>
            </label>
            <input type="password" name="password_confirmation" class="input input-bordered @error('password_confirmation', 'updatePassword') input-error @enderror" 
                   autocomplete="new-password" />
            @error('password_confirmation', 'updatePassword')
                <label class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </label>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                Update Password
            </button>

            @if (session('status') === 'password-updated')
                <div class="alert alert-success" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Password updated successfully!</span>
                </div>
            @endif
        </div>
    </form>
</section>
