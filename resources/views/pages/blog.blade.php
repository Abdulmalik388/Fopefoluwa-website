@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Our Blogs</h2>

    <div class="row justify-content-center">
        @forelse ($blogs as $blog)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" 
                             class="card-img-top img-fluid" 
                             alt="{{ $blog->title }}" 
                             style="height: 180px; object-fit: cover;">
                    @endif
                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="card-title fw-bold mb-2">{{ $blog->title }}</h6>
                        <p class="card-text text-muted small mb-3">
                            {{ Str::limit($blog->content, 80) }}
                        </p>
                        <a href="{{ route('blogs.show', $blog->id) }}" 
                           class="btn btn-sm btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No blogs available yet.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links() }}
    </div>
</div> 
@endsection
