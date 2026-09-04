@extends('admin.layouts.sidebar')

<div class="edit-blog-page">

    <!-- Page Header -->
    <div class="edit-page-header">

        <div>
            <h1>Edit Blog</h1>
            <p>Update the information and content of this blog post.</p>
        </div>

        <a
            href="{{ route('admin.blogs.index') }}"
            class="back-btn"
        >
            ← Back to Blogs
        </a>

    </div>


    <!-- Error Messages -->
    @if ($errors->any())

        <div class="error-box">

            <div class="error-box-title">
                <span class="error-icon">!</span>
                <span>Please fix the following errors:</span>
            </div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif


    <!-- Form Card -->
    <div class="edit-blog-card">

        <div class="form-card-header">

            <div>
                <h2>Blog Information</h2>
                <p>Make your changes below and save when you're done.</p>
            </div>

            <span class="blog-number">
                #{{ $blog->id }}
            </span>

        </div>


        <form
            action="{{ route('admin.blogs.update', $blog->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <!-- Blog Title -->
            <div class="form-group">

                <label for="title">
                    Blog Title
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $blog->title) }}"
                    placeholder="Enter your blog title"
                    required
                >

            </div>


            <!-- Blog Content -->
            <div class="form-group">

                <div class="label-row">

                    <label for="content">
                        Content
                    </label>

                    <span>
                        Blog body
                    </span>

                </div>

                <textarea
                    id="content"
                    name="content"
                    rows="12"
                    placeholder="Write your blog content here..."
                    required
                >{{ old('content', $blog->content) }}</textarea>

            </div>


            <!-- Actions -->
            <div class="form-actions">

                <a
                    href="{{ route('admin.blogs.index') }}"
                    class="cancel-btn"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="update-btn"
                >
                    ✓ Update Blog
                </button>

            </div>

        </form>

    </div>

</div>


<style>

    /* =========================================
       PAGE
    ========================================= */

    .edit-blog-page {
         max-width: 1000px;
        margin: 0 auto;
        padding: 10px 5px 40px;
        margin-right:50px;
    }


    /* =========================================
       HEADER
    ========================================= */

    .edit-page-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;

        gap: 20px;

        margin-bottom: 28px;
    }

    .edit-page-header h1 {
        margin: 0;

        color: #17201c;

        font-size: 30px;
        font-weight: 700;

        letter-spacing: -0.4px;
    }

    .edit-page-header p {
        margin: 7px 0 0;

        color: #7b8580;

        font-size: 14px;
    }


    /* =========================================
       BACK BUTTON
    ========================================= */

    .back-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 10px 15px;

        background: #ffffff;

        color: #09a96c;

        border: 1px solid #9be3c4;
        border-radius: 7px;

        text-decoration: none;

        font-size: 13px;
        font-weight: 600;

        white-space: nowrap;

        transition: 0.2s ease;
    }

    .back-btn:hover {
        background: #e9fbf4;

        color: #078c5a;

        border-color: #09CC7F;
    }


    /* =========================================
       ERROR BOX
    ========================================= */

    .error-box {
        background: #fff5f5;

        border: 1px solid #f1b5ba;

        border-left: 4px solid #dc3545;

        border-radius: 7px;

        padding: 15px 17px;

        margin-bottom: 22px;

        color: #842029;
    }

    .error-box-title {
        display: flex;
        align-items: center;

        gap: 9px;

        font-size: 14px;
        font-weight: 700;
    }

    .error-icon {
        display: flex;
        align-items: center;
        justify-content: center;

        width: 21px;
        height: 21px;

        background: #dc3545;
        color: #ffffff;

        border-radius: 50%;

        font-size: 12px;
        font-weight: 700;
    }

    .error-box ul {
        margin: 10px 0 0;
        padding-left: 30px;

        font-size: 13px;

        line-height: 1.7;
    }


    /* =========================================
       FORM CARD
    ========================================= */

    .edit-blog-card {
        background: #ffffff;

        border: 1px solid #e4ebe7;

        border-radius: 10px;

        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);

        overflow: hidden;
    }


    /* =========================================
       CARD HEADER
    ========================================= */

    .form-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 15px;

        padding: 22px 25px;

        border-bottom: 1px solid #e8edeb;

        background: #ffffff;
    }

    .form-card-header h2 {
        margin: 0;

        color: #17201c;

        font-size: 18px;
        font-weight: 700;
    }

    .form-card-header p {
        margin: 5px 0 0;

        color: #87918c;

        font-size: 13px;
    }

    .blog-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 7px 10px;

        background: #e9fbf4;

        color: #079d65;

        border: 1px solid #c6f1dc;

        border-radius: 6px;

        font-size: 12px;
        font-weight: 700;

        white-space: nowrap;
    }


    /* =========================================
       FORM
    ========================================= */

    .edit-blog-card form {
        padding: 25px;
    }


    /* =========================================
       FORM GROUP
    ========================================= */

    .form-group {
        margin-bottom: 23px;
    }

    .form-group label {
        display: block;

        margin-bottom: 8px;

        color: #26312c;

        font-size: 14px;
        font-weight: 700;
    }


    /* =========================================
       LABEL ROW
    ========================================= */

    .label-row {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 10px;
    }

    .label-row label {
        margin-bottom: 8px;
    }

    .label-row span {
        color: #9aa39f;

        font-size: 11px;

        margin-bottom: 8px;
    }


    /* =========================================
       INPUT
    ========================================= */

    .form-group input,
    .form-group textarea {

        width: 100%;

        background: #ffffff;

        border: 1px solid #dce4e0;

        border-radius: 7px;

        color: #202a26;

        font-family: Arial, sans-serif;

        font-size: 14px;

        outline: none;

        transition:
            border-color 0.2s ease,
            box-shadow 0.2s ease;
    }

    .form-group input {
        height: 48px;

        padding: 0 14px;
    }

    .form-group textarea {
        padding: 14px;

        min-height: 260px;

        line-height: 1.6;

        resize: vertical;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #a5ada9;
    }

    .form-group input:focus,
    .form-group textarea:focus {

        border-color: #09CC7F;

        box-shadow: 0 0 0 3px rgba(9, 204, 127, 0.10);
    }


    /* =========================================
       ACTIONS
    ========================================= */

    .form-actions {

        display: flex;
        align-items: center;
        justify-content: flex-end;

        gap: 10px;

        padding-top: 8px;

        border-top: 1px solid #edf0ee;
    }


    /* Cancel */

    .cancel-btn {

        display: inline-flex;
        align-items: center;
        justify-content: center;

        min-width: 95px;

        padding: 11px 17px;

        background: #ffffff;

        color: #66716c;

        border: 1px solid #d8e0dc;

        border-radius: 7px;

        text-decoration: none;

        font-size: 13px;
        font-weight: 600;

        transition: 0.2s ease;
    }

    .cancel-btn:hover {

        background: #f4f6f5;

        color: #414b47;

        border-color: #c8d1cd;
    }


    /* Update */

    .update-btn {

        display: inline-flex;
        align-items: center;
        justify-content: center;

        min-width: 135px;

        padding: 11px 17px;

        background: #09CC7F;

        color: #ffffff;

        border: 1px solid #09CC7F;

        border-radius: 7px;

        font-size: 13px;
        font-weight: 700;

        cursor: pointer;

        transition: 0.2s ease;
    }

    .update-btn:hover {

        background: #07b56f;

        border-color: #07b56f;

        transform: translateY(-1px);
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 991px) {

        .edit-blog-page {
            padding: 15px 5px 40px;
        }

        .edit-page-header h1 {
            font-size: 27px;
        }

    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 575px) {

        .edit-blog-page {
            padding: 10px 0 30px;
        }

        .edit-page-header {

            display: block;

            margin-bottom: 22px;
        }

        .edit-page-header h1 {
            font-size: 24px;
        }

        .edit-page-header p {
            margin-bottom: 15px;

            font-size: 13px;
        }

        .back-btn {
            width: 100%;
        }


        .form-card-header {

            align-items: flex-start;

            padding: 18px;
        }

        .form-card-header h2 {
            font-size: 16px;
        }

        .form-card-header p {
            font-size: 12px;
        }


        .edit-blog-card form {
            padding: 18px;
        }


        .form-group input {
            height: 46px;
        }

        .form-group textarea {
            min-height: 220px;
        }


        .form-actions {

            flex-direction: column-reverse;

            align-items: stretch;

        }

        .cancel-btn,
        .update-btn {

            width: 100%;
        }

    }

</style>