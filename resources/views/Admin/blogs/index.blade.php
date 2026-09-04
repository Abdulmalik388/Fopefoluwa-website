@extends('admin.layouts.sidebar')

<div class="admin-page">

    <!-- Page Header -->
    <div class="page-header">

        <div>
            <div class="page-title-row">
                <h1>All Blogs</h1>
            </div>

            <p class="page-subtitle">
                Manage and organize your published blog posts.
            </p>
        </div>

        <a href="{{ route('admin.blogs.create') }}" class="add-blog-btn">
            <span class="add-icon">+</span>
            <span>Add Blog</span>
        </a>

    </div>


    <!-- Success Message -->
    @if(session('success'))
        <div class="success-message">
            <span class="success-icon">✓</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif


    <!-- Blog Table Card -->
    <div class="blogs-card">

        <div class="card-top">

            <div>
                <h2>Blog Posts</h2>
                <p>
                    {{ $blogs->count() }} {{ Str::plural('blog', $blogs->count()) }} displayed
                </p>
            </div>

        </div>


        <!-- Responsive Table -->
        <div class="table-wrapper">

            <table class="blogs-table">

                <thead>
                    <tr>
                        <th class="id-column">ID</th>
                        <th>Blog</th>
                        <th>Content</th>
                        <th>Created</th>
                        <th class="actions-column">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($blogs as $blog)

                        <tr>

                            <!-- ID -->
                            <td class="blog-id">
                                #{{ $blog->id }}
                            </td>


                            <!-- Blog Title -->
                            <td>

                                <div class="blog-title-wrapper">

                                    <div class="blog-placeholder">
                                        B
                                    </div>

                                    <div class="blog-title">
                                        {{ $blog->title }}
                                    </div>

                                </div>

                            </td>


                            <!-- Content -->
                            <td>

                                <div class="blog-content">
                                    {{ Str::limit($blog->content, 65) }}
                                </div>

                            </td>


                            <!-- Date -->
                            <td>

                                <span class="date-badge">
                                    {{ $blog->created_at->format('d M, Y') }}
                                </span>

                            </td>


                            <!-- Actions -->
                            <td>

                                <div class="action-buttons">

                                    <!-- Edit -->
                                    <a
                                        href="{{ route('admin.blogs.edit', $blog->id) }}"
                                        class="edit-btn"
                                    >
                                        <span>✎</span>
                                        <span>Edit</span>
                                    </a>


                                    <!-- Delete -->
                                    <form
                                        action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                        method="POST"
                                        class="delete-form"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="delete-btn"
                                            onclick="return confirm('Are you sure you want to delete this blog?')"
                                        >
                                            <span>×</span>
                                            <span>Delete</span>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5">

                                <div class="empty-state">

                                    <div class="empty-icon">
                                        +
                                    </div>

                                    <h3>No blogs found</h3>

                                    <p>
                                        You haven't created any blog posts yet.
                                    </p>

                                    <a
                                        href="{{ route('admin.blogs.create') }}"
                                        class="empty-add-btn"
                                    >
                                        Add Your First Blog
                                    </a>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<style>

    /* =========================================
       PAGE
    ========================================= */

    .admin-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 10px 5px 40px;
        margin-right:50px;
    }


    /* =========================================
       HEADER
    ========================================= */

    .page-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 28px;
    }

    .page-header h1 {
        margin: 0;
        color: #17201c;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .page-subtitle {
        margin: 7px 0 0;
        color: #78837e;
        font-size: 14px;
    }


    /* =========================================
       ADD BLOG BUTTON
    ========================================= */

    .add-blog-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;

        background: #09CC7F;
        color: #ffffff;

        text-decoration: none;

        padding: 12px 18px;

        border-radius: 7px;

        font-size: 14px;
        font-weight: 600;

        border: 1px solid #09CC7F;

        transition: all 0.2s ease;
    }

    .add-blog-btn:hover {
        background: #07b56f;
        border-color: #07b56f;
        color: #ffffff;
        transform: translateY(-1px);
    }

    .add-icon {
        font-size: 20px;
        line-height: 1;
        font-weight: 400;
    }


    /* =========================================
       SUCCESS MESSAGE
    ========================================= */

    .success-message {
        display: flex;
        align-items: center;
        gap: 10px;

        background: #e9fbf4;
        border: 1px solid #b9f0d9;

        color: #08784d;

        padding: 13px 16px;

        border-radius: 7px;

        margin-bottom: 22px;

        font-size: 14px;
        font-weight: 500;
    }

    .success-icon {
        display: flex;
        align-items: center;
        justify-content: center;

        width: 22px;
        height: 22px;

        background: #09CC7F;
        color: white;

        border-radius: 50%;

        font-size: 13px;
        font-weight: bold;
    }


    /* =========================================
       BLOG CARD
    ========================================= */

    .blogs-card {
        background: #ffffff;

        border: 1px solid #e6ebe8;

        border-radius: 10px;

        overflow: hidden;

        box-shadow: 0 3px 12px rgba(23, 32, 28, 0.04);
    }


    /* =========================================
       CARD TOP
    ========================================= */

    .card-top {
        padding: 22px 24px;

        border-bottom: 1px solid #edf0ee;

        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-top h2 {
        margin: 0;

        font-size: 18px;
        font-weight: 700;

        color: #17201c;
    }

    .card-top p {
        margin: 5px 0 0;

        font-size: 13px;
        color: #8a938f;
    }


    /* =========================================
       TABLE
    ========================================= */

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .blogs-table {
        width: 100%;
        min-width: 850px;

        border-collapse: collapse;
    }

    .blogs-table thead {
        background: #f8faf9;
    }

    .blogs-table th {
        padding: 14px 20px;

        text-align: left;

        color: #68736e;

        font-size: 12px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 0.5px;

        border-bottom: 1px solid #e8ecea;

        white-space: nowrap;
    }

    .blogs-table td {
        padding: 17px 20px;

        border-bottom: 1px solid #edf0ee;

        vertical-align: middle;
    }

    .blogs-table tbody tr {
        transition: background 0.15s ease;
    }

    .blogs-table tbody tr:hover {
        background: #fbfdfc;
    }

    .blogs-table tbody tr:last-child td {
        border-bottom: none;
    }


    /* =========================================
       COLUMN WIDTHS
    ========================================= */

    .id-column {
        width: 70px;
    }

    .actions-column {
        width: 190px;
    }


    /* =========================================
       BLOG ID
    ========================================= */

    .blog-id {
        color: #09a969;
        font-size: 13px;
        font-weight: 700;
    }


    /* =========================================
       BLOG TITLE
    ========================================= */

    .blog-title-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;

        min-width: 210px;
    }

    .blog-placeholder {
        width: 38px;
        height: 38px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #e9fbf4;
        color: #09b973;

        border: 1px solid #c8f3df;

        border-radius: 7px;

        font-size: 16px;
        font-weight: 700;
    }

    .blog-title {
        color: #202a26;

        font-size: 14px;
        font-weight: 600;

        line-height: 1.4;
    }


    /* =========================================
       BLOG CONTENT
    ========================================= */

    .blog-content {
        max-width: 300px;

        color: #737d78;

        font-size: 13px;

        line-height: 1.5;
    }


    /* =========================================
       DATE
    ========================================= */

    .date-badge {
        display: inline-block;

        background: #f2f5f4;

        color: #5e6863;

        padding: 6px 9px;

        border-radius: 5px;

        font-size: 12px;
        font-weight: 600;

        white-space: nowrap;
    }


    /* =========================================
       ACTIONS
    ========================================= */

    .action-buttons {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .edit-btn,
    .delete-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;

        padding: 8px 11px;

        border-radius: 6px;

        font-size: 12px;
        font-weight: 600;

        cursor: pointer;

        text-decoration: none;

        transition: all 0.2s ease;
    }


    /* Edit */

    .edit-btn {
        background: #ffffff;

        color: #08a96a;

        border: 1px solid #9de5c6;
    }

    .edit-btn:hover {
        background: #09CC7F;
        color: #ffffff;
        border-color: #09CC7F;
    }


    /* Delete */

    .delete-form {
        margin: 0;
    }

    .delete-btn {
        background: #ffffff;

        color: #dc3545;

        border: 1px solid #f0aeb5;
    }

    .delete-btn:hover {
        background: #dc3545;
        color: #ffffff;
        border-color: #dc3545;
    }


    /* =========================================
       EMPTY STATE
    ========================================= */

    .empty-state {
        padding: 60px 20px;

        text-align: center;
    }

    .empty-icon {
        width: 52px;
        height: 52px;

        margin: 0 auto 15px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #e9fbf4;
        color: #09CC7F;

        border-radius: 50%;

        font-size: 28px;
        font-weight: 300;
    }

    .empty-state h3 {
        margin: 0 0 7px;

        color: #27312d;

        font-size: 18px;
        font-weight: 700;
    }

    .empty-state p {
        margin: 0 0 18px;

        color: #87918c;

        font-size: 13px;
    }

    .empty-add-btn {
        display: inline-block;

        background: #09CC7F;
        color: #ffffff;

        text-decoration: none;

        padding: 10px 16px;

        border-radius: 6px;

        font-size: 13px;
        font-weight: 600;

        transition: background 0.2s ease;
    }

    .empty-add-btn:hover {
        background: #07b56f;
        color: #ffffff;
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 991px) {

        .admin-page {
            padding: 5px 0 30px;
        }

        .page-header {
            align-items: flex-start;
        }

        .page-header h1 {
            font-size: 27px;
        }

    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 575px) {

        .page-header {
            display: block;
            margin-bottom: 22px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .page-subtitle {
            font-size: 13px;
            margin-bottom: 17px;
        }

        .add-blog-btn {
            width: 100%;
            padding: 12px;
        }

        .success-message {
            font-size: 13px;
        }

        .card-top {
            padding: 18px 16px;
        }

        .card-top h2 {
            font-size: 16px;
        }

        .table-wrapper {
            border-top: none;
        }

        .blogs-table th {
            padding: 13px 15px;
        }

        .blogs-table td {
            padding: 15px;
        }

    }

</style>