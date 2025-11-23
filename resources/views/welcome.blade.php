  @extends('partials.layout')
  @section('title', 'Home')
  @section('content')
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse ($posts as $post)
                @include('partials/post-card')
            @empty
                <div class="col-span-full">
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-base-content/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h2 class="card-title justify-center">No Posts Found</h2>
                            <p class="text-base-content/70">There are no blog posts to display at the moment.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Custom DaisyUI Pagination --}}
        {{ $posts->links('pagination.simple-daisyui') }}
  @endsection
