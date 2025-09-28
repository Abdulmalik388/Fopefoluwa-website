@extends('admin.layouts.sidebar')

<div class="container mt-5" style="margin-left: 260px;"> 
    <div class="col-lg-10">
        <div class="card shadow-sm border-0 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-primary fw-bold mb-0">Team Members</h2>
                <a href="{{ route('admin.team.create') }}" class="btn btn-success">
                    + Add Team Member
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($team as $member)
                        <tr>
                            <td>
                                <img src="{{ asset($member->image) }}" 
                                     alt="{{ $member->name }}" 
                                     class="rounded-circle border shadow-sm"
                                     width="70" height="70">
                            </td>
                            <td class="fw-semibold">{{ $member->name }}</td>
                            <td>{{ $member->post }}</td>
                            <td>
                                <a href="{{ route('admin.team.edit', $member->id) }}" 
                                   class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('admin.team.destroy', $member->id) }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this member?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No team members yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
