@extends('admin.layouts.sidebar')

@section('title', 'Add Blog')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Add New Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Blog Title -->
                        <div class="form-group mb-3">
                            <label for="title">Blog Title</label>
                            <input type="text" name="title" id="title" 
                                class="form-control @error('title') is-invalid @enderror" 
                                value="{{ old('title') }}" required>
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Blog Content -->
                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" rows="5" 
                                class="form-control @error('content') is-invalid @enderror" 
                                required>{{ old('content') }}</textarea>
                            @error('content')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Blog Image -->
                        <div class="form-group mb-3">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" id="image" 
                                class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-4">Add Blog</button>
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary px-4">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
