@extends('admin.layouts.sidebar')


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">All Blogs</h2>
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-lg"></i> Add Blog
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success text-center mb-4">{{ session('success') }}</div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 60px;">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col" style="width: 150px;">Created At</th>
                                <th scope="col" style="width: 180px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($blogs as $blog)
                                <tr>
                                    <td class="fw-bold">{{ $blog->id }}</td>
                                    <td>
                                        <span class="text-dark">{{ $blog->title }}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{ Str::limit($blog->content, 50) }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $blog->created_at->format('d M, Y') }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-warning me-2">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Are you sure you want to delete this blog?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">No blogs found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

