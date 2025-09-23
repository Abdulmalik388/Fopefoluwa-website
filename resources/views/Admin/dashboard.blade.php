@extends('admin.layouts.sidebar')


<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="w-100" style="max-width: 1000px;">
        <!-- Dashboard Heading -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">Admin Dashboard</h1>
            <p class="lead text-muted">Welcome back! Manage blogs, monitor activities, and keep things running smoothly.</p>
        </div>

        <!-- Dashboard Cards -->
        <div class="row g-4 justify-content-center">
            <!-- Total Blogs -->
          <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100 text-center rounded-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-plus-circle display-4 text-success"></i>
                        </div>
                        <h5 class="card-title fw-semibold">Total Blogs</h5>
                        <p class="card-text text-muted">Check The Number Of Published <br> Blogs.</p>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-success w-100">Manage Blogs</a>
                    </div>
                </div>
            </div>

            <!-- Add Blog -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100 text-center rounded-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-plus-circle display-4 text-success"></i>
                        </div>
                        <h5 class="card-title fw-semibold">Add Blog</h5>
                        <p class="card-text text-muted">Quickly add new blog posts and keep your content fresh.</p>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success w-100">Add New Blog</a>
                    </div>
                </div>
            </div>

            <!-- Log Out -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100 text-center rounded-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-box-arrow-right display-4 text-danger"></i>
                        </div>
                        <h5 class="card-title fw-semibold">Log Out</h5>
                        <p class="card-text text-muted">Sign out securely after finishing your tasks.</p>
                        <a href="{{ route('admin.logout') }}" class="btn btn-danger w-100">Log Out</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notes Section -->
        <div class="mt-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h4 class="fw-bold text-primary mb-3">
                        <i class="bi bi-info-circle me-2"></i> Admin Notes
                    </h4>
                    <ul class="list-unstyled mb-0">
                        <li>✅ Review new blog submissions regularly to maintain quality.</li>
                        <li>✅ Monitor activity and handle support requests promptly.</li>
                        <li>✅ Keep statistics up-to-date for better insights.</li>
                        <li>✅ Always log out after completing tasks for security.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

