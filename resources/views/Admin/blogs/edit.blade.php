@extends('admin.layouts.sidebar')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <h2 class="text-center mb-4">Edit Blog</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" 
                       class="form-control" 
                       id="title" 
                       name="title" 
                       value="{{ old('title', $blog->title) }}" 
                       required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" 
                          id="content" 
                          name="content" 
                          rows="5" 
                          required>{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Update Blog</button>
            </div>
        </form>
    </div>
</div>

