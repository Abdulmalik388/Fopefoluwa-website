@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <h2 class="mb-2 fw-bold">{{ $blog->title }}</h2>
            <p class="text-muted mb-4">
                <small>Published on {{ $blog->created_at->format('F d, Y') }}</small>
            </p>

            @if ($blog->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $blog->image) }}" 
                         class="img-fluid rounded shadow-sm" 
                         alt="{{ $blog->title }}"
                         style="max-height: 350px; object-fit: cover; width: 100%;">
                </div>
            @endif

            <div class="mb-4" style="line-height: 1.7; font-size: 1rem;">
                {!! nl2br(e($blog->content)) !!}
            </div>

            <div class="d-flex justify-content-start">
                <a href="{{ route('blog') }}" class="btn btn-outline-primary">
                    ← Back to Blogs
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
