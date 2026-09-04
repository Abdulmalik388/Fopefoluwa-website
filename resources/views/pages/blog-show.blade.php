@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            {{-- Blog Header & Image --}}
            <h2 class="mb-2 fw-bold text-dark">{{ $blog->title }}</h2>
            <p class="text-muted mb-4">
                <small><i class="bi bi-calendar-event"></i> Published on {{ $blog->created_at->format('F d, Y') }}</small>
            </p>

            @if ($blog->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $blog->image) }}" 
                         class="img-fluid rounded shadow-sm" 
                         alt="{{ $blog->title }}"
                         style="max-height: 400px; object-fit: cover; width: 100%;">
                </div>
            @endif

            {{-- Blog Content --}}
            <div class="mb-5" style="line-height: 1.8; font-size: 1.05rem; color: #333;">
                {!! nl2br(e($blog->content)) !!}
            </div>

            <div class="d-flex justify-content-start mb-5">
                <a href="{{ route('blog') }}" class="btn btn-outline-primary rounded-pill px-4">
                    ← Back to Blogs
                </a>
            </div>

            <hr class="my-5">

            {{-- Comments Section --}}
            <div id="comments" class="mt-4">
                <h4 class="fw-bold mb-4">
                    Comments ({{ $blog->allComments->count() }})
                </h4>

                @if(session('comment_success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('comment_success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Add Main Comment Form --}}
                <div class="card border-0 shadow-sm rounded-3 mb-5 p-4 bg-light">
                    <h5 class="fw-semibold mb-3">Leave a Comment</h5>
                    <form action="{{ route('comments.store', $blog->id) }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label small fw-bold">Your Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="John Doe" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label small fw-bold">Email Address <span class="text-muted">(optional)</span></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="john@example.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="comment" class="form-label small fw-bold">Comment <span class="text-danger">*</span></label>
                                <textarea name="comment" id="comment" rows="4" class="form-control @error('comment') is-invalid @enderror" placeholder="Write your thought here..." required>{{ old('comment') }}</textarea>
                                @error('comment')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-4 rounded-pill">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Comments List --}}
                <div class="comments-list">
                    @forelse($blog->comments as $comment)
                        <div class="card border-0 shadow-sm rounded-3 mb-3 p-3 bg-white" id="comment-{{ $comment->id }}">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 42px; height: 42px; font-weight: bold;">
                                    {{ strtoupper(substr($comment->name, 0, 1)) }}
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="fw-bold mb-0 text-dark">{{ $comment->name }}</h6>
                                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="text-secondary mb-2" style="white-space: pre-line;">{{ $comment->comment }}</p>

                                    {{-- Reply Toggle Button --}}
                                    <button class="btn btn-sm btn-link text-decoration-none p-0 text-primary fw-semibold" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#reply-form-{{ $comment->id }}" 
                                            aria-expanded="false" 
                                            aria-controls="reply-form-{{ $comment->id }}">
                                        ↳ Reply
                                    </button>

                                    {{-- Inline Reply Form --}}
                                    <div class="collapse mt-3" id="reply-form-{{ $comment->id }}">
                                        <div class="card card-body bg-light border-0 p-3 rounded-3">
                                            <h6 class="fw-bold mb-2 small">Replying to {{ $comment->name }}</h6>
                                            <form action="{{ route('comments.store', $blog->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                <div class="row g-2">
                                                    <div class="col-md-6">
                                                        <input type="text" name="name" class="form-control form-control-sm" placeholder="Your Name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" name="email" class="form-control form-control-sm" placeholder="Email Address (optional)">
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea name="comment" rows="2" class="form-control form-control-sm" placeholder="Write your reply..." required></textarea>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button type="submit" class="btn btn-sm btn-primary px-3 rounded-pill">Submit Reply</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- Nested Replies --}}
                                    @if($comment->replies->count() > 0)
                                        <div class="mt-3 border-start border-2 ps-3 border-primary-subtle">
                                            @foreach($comment->replies as $reply)
                                                <div class="d-flex align-items-start mt-3" id="comment-{{ $reply->id }}">
                                                    <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2 flex-shrink-0" style="width: 32px; height: 32px; font-size: 0.85rem; font-weight: bold;">
                                                        {{ strtoupper(substr($reply->name, 0, 1)) }}
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="fw-bold mb-0 text-dark small">{{ $reply->name }}</h6>
                                                            <small class="text-muted" style="font-size: 0.75rem;">{{ $reply->created_at->diffForHumans() }}</small>
                                                        </div>
                                                        <p class="text-secondary mb-0 small" style="white-space: pre-line;">{{ $reply->comment }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted text-center py-4">No comments yet. Be the first to leave a comment!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
