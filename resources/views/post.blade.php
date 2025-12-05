@extends('partials.layout')
@section('title', $post->title)
@section('content')
    @include('partials.post-card', ['full' => true])

    <!-- Comments Section -->
    <div class="mt-8">
        <h3 class="text-xl font-bold mb-4">Comments ({{ $post->comments_count }})</h3>
        
        @auth
            <!-- Comment Form -->
            <div class="card bg-base-200 shadow-sm mb-6">
                <div class="card-body">
                    <h4 class="card-title text-lg">Add a comment</h4>
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Your comment</span>
                            </label>
                            <textarea 
                                name="body" 
                                class="textarea textarea-bordered h-24 @error('body') textarea-error @enderror" 
                                placeholder="Write your comment here..."
                                required
                            >{{ old('body') }}</textarea>
                            @error('body')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        
                        <div class="card-actions justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                Post Comment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="alert alert-info mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><a href="{{ route('login') }}" class="link link-primary">Login</a> or <a href="{{ route('register') }}" class="link link-primary">register</a> to post a comment.</span>
            </div>
        @endauth
        
        <!-- Comments List -->
        @forelse ($post->comments as $comment)
            <div class="card bg-base-300 shadow-sm mb-4">
                <div class="card-body">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <p class="text-base-content mb-2">{{ $comment->body }}</p>
                            <div class="text-sm text-base-content/60">
                                By <strong>{{ $comment->user->name }}</strong> 
                                on {{ $comment->created_at->format('M j, Y \a\t g:i A') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-base-content/60 py-8">
                <p>No comments yet. Be the first to comment!</p>
            </div>
        @endforelse
    </div>
@endsection