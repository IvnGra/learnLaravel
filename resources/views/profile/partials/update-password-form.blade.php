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
            <input type="password" name="current_password" placeholder="••••••••"
                   class="input input-bordered @error('current_password', 'updatePassword') input-error @enderror" 
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
            <input type="password" name="password" placeholder="••••••••"
                   class="input input-bordered @error('password', 'updatePassword') input-error @enderror" 
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
            <input type="password" name="password_confirmation" placeholder="••••••••"
                   class="input input-bordered @error('password_confirmation', 'updatePassword') input-error @enderror" 
                   autocomplete="new-password" />
            @error('password_confirmation', 'updatePassword')
                <label class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </label>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    </form>
</section>
