@extends('admin.layouts.sidebar')


<div class="container mt-5 d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
    <h1 class="mb-4 text-center fw-bold text-primary">Admin Dashboard</h1>
    <p class="lead text-center mb-5">Manage blogs, view stats, and handle admin tasks easily.</p>

    <div class="row justify-content-center w-100">
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 h-100" style="border-radius: 1rem;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-journal-richtext display-4 text-primary"></i>
                    </div>
                    <h5 class="card-title">Total Blogs</h5>
                    <p class="card-text fs-2 fw-bold text-dark">123</p>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary w-100">Manage Blogs</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 h-100" style="border-radius: 1rem;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-plus-circle display-4 text-success"></i>
                    </div>
                    <h5 class="card-title">Add Blog</h5>
                   
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-success w-100">Add New Blog</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 h-100" style="border-radius: 1rem;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-box-arrow-right display-4 text-danger"></i>
                    </div>
                    <h5 class="card-title">Log Out</h5>
                    <a href="{{ route('admin.logout') }}" class="btn btn-danger w-100 mt-3">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Admin Notes Section -->
<div class="container mt-5 d-flex justify-content-center">
    <div class="alert alert-info w-75 text-center" role="alert">
        <h4 class="alert-heading">Admin Notes</h4>
        <ul class="mb-0 list-unstyled"></ul>
            <li>Review new blog submissions regularly to maintain quality.</li>
            <li>Monitor user activity and respond to support requests promptly.</li>
            <li>Keep the dashboard updated with the latest statistics.</li>
            <li>Remember to log out after completing your tasks for security.</li>
        </ul>
    </div>
</div>