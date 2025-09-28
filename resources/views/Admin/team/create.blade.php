@extends('admin.layouts.sidebar')

<div class="container mt-5 d-flex justify-content-center">
    <div class="col-lg-6 col-md-8">
        <div class="card shadow-sm border-0 p-4">
            <h2 class="mb-4 text-center text-primary">Add Team Member</h2>

            <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Post</label>
                    <input type="text" name="post" class="form-control" value="{{ old('post') }}" required>
                    @error('post') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" required>
                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
