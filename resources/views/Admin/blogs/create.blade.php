@extends('admin.layouts.sidebar')

@section('title', 'Add Blog')

<div class="add-blog-page">

    <!-- Page Header -->
    <div class="page-header">

        <div>
            <h1>Add New Blog</h1>
            <p>Create and publish a new blog post for your website.</p>
        </div>

        <a
            href="{{ route('admin.blogs.index') }}"
            class="back-btn"
        >
            ← Back to Blogs
        </a>

    </div>


    <!-- Form Card -->
    <div class="add-blog-card">

        <!-- Card Header -->
        <div class="form-card-header">

            <div>
                <h2>Blog Information</h2>
                <p>Fill in the details below to create your blog post.</p>
            </div>

            <span class="new-blog-badge">
                New Blog
            </span>

        </div>


        <!-- Form -->
        <form
            action="{{ route('admin.blogs.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <!-- Blog Title -->
            <div class="form-group">

                <label for="title">
                    Blog Title
                </label>

                <input
                    type="text"
                    name="title"
                    id="title"
                    class="@error('title') input-error @enderror"
                    value="{{ old('title') }}"
                    placeholder="Enter your blog title"
                    required
                >

                @error('title')
                    <div class="field-error">
                        {{ $message }}
                    </div>
                @enderror

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
                    name="content"
                    id="content"
                    rows="12"
                    class="@error('content') input-error @enderror"
                    placeholder="Write your blog content here..."
                    required
                >{{ old('content') }}</textarea>

                @error('content')
                    <div class="field-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Blog Image -->
            <div class="form-group">

                <label for="image">
                    Blog Image
                </label>

                <div class="image-upload-box">

                    <div class="upload-icon">
                        ↑
                    </div>

                    <div class="upload-text">

                        <strong>
                            Upload blog image
                        </strong>

                        <span>
                            Choose a JPG, JPEG, PNG or WEBP image
                        </span>

                    </div>

                    <input
                        type="file"
                        name="image"
                        id="image"
                        class="@error('image') input-error @enderror"
                        accept="image/*"
                    >

                </div>

                @error('image')
                    <div class="field-error">
                        {{ $message }}
                    </div>
                @enderror

                <div id="selected-file" class="selected-file"></div>

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
                    class="submit-btn"
                >
                    ✓ Add Blog
                </button>

            </div>

        </form>

    </div>

</div>


<style>

    /* =========================================
       PAGE
    ========================================= */

    .add-blog-page {
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

        letter-spacing: -0.4px;
    }

    .page-header p {
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
       MAIN CARD
    ========================================= */

    .add-blog-card {
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


    /* =========================================
       NEW BLOG BADGE
    ========================================= */

    .new-blog-badge {
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

    .add-blog-card form {
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
        margin-bottom: 8px;

        color: #9aa39f;

        font-size: 11px;
    }


    /* =========================================
       INPUTS
    ========================================= */

    .form-group input[type="text"],
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

    .form-group input[type="text"] {

        height: 48px;

        padding: 0 14px;
    }

    .form-group textarea {

        min-height: 270px;

        padding: 14px;

        line-height: 1.6;

        resize: vertical;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {

        color: #a5ada9;
    }

    .form-group input[type="text"]:focus,
    .form-group textarea:focus {

        border-color: #09CC7F;

        box-shadow: 0 0 0 3px rgba(9, 204, 127, 0.10);
    }


    /* =========================================
       INVALID INPUT
    ========================================= */

    .form-group .input-error {

        border-color: #dc3545 !important;

        box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.08) !important;
    }

    .field-error {

        margin-top: 7px;

        color: #dc3545;

        font-size: 12px;
        font-weight: 500;
    }


    /* =========================================
       IMAGE UPLOAD
    ========================================= */

    .image-upload-box {

        position: relative;

        display: flex;
        align-items: center;

        gap: 14px;

        min-height: 90px;

        padding: 18px;

        background: #fbfdfc;

        border: 1px dashed #b9c9c2;

        border-radius: 8px;

        cursor: pointer;

        transition:
            border-color 0.2s ease,
            background 0.2s ease;
    }

    .image-upload-box:hover {

        background: #f5fcf9;

        border-color: #09CC7F;
    }


    .upload-icon {

        width: 45px;
        height: 45px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #e9fbf4;

        color: #09CC7F;

        border: 1px solid #c6f1dc;

        border-radius: 7px;

        font-size: 23px;
        font-weight: 400;
    }


    .upload-text {

        display: flex;

        flex-direction: column;

        gap: 4px;
    }

    .upload-text strong {

        color: #26312c;

        font-size: 13px;
    }

    .upload-text span {

        color: #8a9590;

        font-size: 12px;
    }


    .image-upload-box input[type="file"] {

        position: absolute;

        inset: 0;

        width: 100%;
        height: 100%;

        opacity: 0;

        cursor: pointer;
    }


    /* Selected File */

    .selected-file {

        margin-top: 8px;

        color: #09a96c;

        font-size: 12px;

        font-weight: 600;
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


    /* Submit */

    .submit-btn {

        display: inline-flex;
        align-items: center;
        justify-content: center;

        min-width: 130px;

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

    .submit-btn:hover {

        background: #07b56f;

        border-color: #07b56f;

        transform: translateY(-1px);
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 991px) {

        .add-blog-page {
            padding: 15px 5px 40px;
        }

        .page-header h1 {
            font-size: 27px;
        }

    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 575px) {

        .add-blog-page {
            padding: 10px 0 30px;
        }

        .page-header {

            display: block;

            margin-bottom: 22px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .page-header p {

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


        .add-blog-card form {
            padding: 18px;
        }


        .form-group input[type="text"] {
            height: 46px;
        }

        .form-group textarea {
            min-height: 220px;
        }


        .image-upload-box {

            min-height: 85px;

            padding: 14px;
        }

        .upload-icon {

            width: 40px;
            height: 40px;

            font-size: 20px;
        }

        .upload-text span {
            line-height: 1.4;
        }


        .form-actions {

            flex-direction: column-reverse;

            align-items: stretch;
        }

        .cancel-btn,
        .submit-btn {

            width: 100%;
        }

    }

</style>


<script>

    /* Show selected image filename */

    const imageInput = document.getElementById('image');
    const selectedFile = document.getElementById('selected-file');

    if (imageInput) {

        imageInput.addEventListener('change', function () {

            if (this.files && this.files.length > 0) {

                selectedFile.textContent =
                    'Selected: ' + this.files[0].name;

            } else {

                selectedFile.textContent = '';

            }

        });

    }

</script>