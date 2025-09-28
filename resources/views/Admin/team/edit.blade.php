@extends('admin.layouts.sidebar')

<div class="container mt-5 d-flex justify-content-center">
    <div class="col-lg-8 offset-lg-2">
        <div class="card shadow-sm border-0 p-4">
            <h2 class="text-primary fw-bold mb-4">Edit Team Member</h2>

            <form action="{{ route('admin.team.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Post</label>
                    <input type="text" name="post" 
                           class="form-control" 
                           value="{{ old('post', $member->post) }}" required>
                    @error('post') 
                        <small class="text-danger">{{ $message }}</small> 
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Name</label>
                    <input type="text" name="name" 
                           class="form-control" 
                           value="{{ old('name', $member->name) }}" required>
                    @error('name') 
                        <small class="text-danger">{{ $message }}</small> 
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Current Image</label><br>
                    <img src="{{ asset($member->image) }}" 
                         alt="{{ $member->name }}" 
                         width="100" 
                         class="rounded shadow-sm border mb-2"><br>
                    <input type="file" name="image" class="form-control">
                    @error('image') 
                        <small class="text-danger">{{ $message }}</small> 
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.team.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
