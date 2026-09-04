@extends('admin.layouts.sidebar')

<div class="add-team-page">

    <div class="add-team-container">

        {{-- Page Header --}}
        <div class="page-header">

            <div>
                <h2>Add Team Member</h2>
                <p>Add a new member to your organization's team.</p>
            </div>

            <a href="{{ route('admin.team.index') }}" class="back-btn">
                ← Back to Team
            </a>

        </div>


        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="error-alert">

                <div class="error-title">
                    Please fix the following:
                </div>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif


        {{-- Form Card --}}
        <div class="add-card">

            <div class="card-top">

                <div>
                    <span class="card-label">NEW MEMBER</span>
                    <h3>Member Information</h3>
                </div>

                <div class="member-icon">
                    +
                </div>

            </div>


            <form
                action="{{ route('admin.team.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                {{-- Name --}}
                <div class="form-group">

                    <label for="name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-input"
                        value="{{ old('name') }}"
                        placeholder="Enter team member's name"
                        required
                    >

                    @error('name')
                        <div class="field-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Post --}}
                <div class="form-group">

                    <label for="post">
                        Post
                    </label>

                    <input
                        type="text"
                        id="post"
                        name="post"
                        class="form-input"
                        value="{{ old('post') }}"
                        placeholder="e.g. Executive Director"
                        required
                    >

                    @error('post')
                        <div class="field-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Image --}}
                <div class="form-group">

                    <label for="image">
                        Profile Image
                    </label>

                    <div class="upload-box">

                        <div class="upload-icon">
                            ↑
                        </div>

                        <div class="upload-content">

                            <strong id="file-name">
                                Choose profile image
                            </strong>

                            <span>
                                JPG, JPEG or PNG recommended
                            </span>

                        </div>

                        <label
                            for="image"
                            class="choose-btn"
                        >
                            Browse
                        </label>

                        <input
                            type="file"
                            name="image"
                            id="image"
                            accept="image/*"
                            required
                        >

                    </div>

                    @error('image')
                        <div class="field-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Buttons --}}
                <div class="form-actions">

                    <a
                        href="{{ route('admin.team.index') }}"
                        class="cancel-btn"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="save-btn"
                    >
                        Add Team Member
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<style>

    :root {
        --primary-green: #09CC7F;
        --primary-green-dark: #08b871;
        --dark-text: #202124;
        --muted-text: #6b7280;
        --border-color: #e5e7eb;
        --light-bg: #f7f9f8;
        --danger: #dc3545;
    }


    * {
        box-sizing: border-box;
    }


    /* =========================
       PAGE
    ========================= */

    .add-team-page {
        margin-left: 250px;
        min-height: 100vh;
        background: var(--light-bg);
        padding: 40px;
    }

    .add-team-container {
        max-width: 900px;
        margin: 0 auto;
    }


    /* =========================
       HEADER
    ========================= */

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .page-header h2 {
        margin: 0 0 6px;
        color: var(--dark-text);
        font-size: 28px;
        font-weight: 700;
    }

    .page-header p {
        margin: 0;
        color: var(--muted-text);
        font-size: 14px;
    }


    /* =========================
       BACK BUTTON
    ========================= */

    .back-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 16px;
        background: #fff;
        border: 1px solid var(--border-color);
        color: #374151;
        text-decoration: none;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        white-space: nowrap;
        transition: 0.2s ease;
    }

    .back-btn:hover {
        border-color: var(--primary-green);
        color: var(--primary-green);
        text-decoration: none;
    }


    /* =========================
       ERROR ALERT
    ========================= */

    .error-alert {
        background: #fff5f5;
        border: 1px solid #fecaca;
        border-left: 4px solid var(--danger);
        padding: 15px 18px;
        margin-bottom: 20px;
        border-radius: 6px;
        color: #991b1b;
    }

    .error-title {
        font-weight: 700;
        margin-bottom: 6px;
    }

    .error-alert ul {
        margin: 0;
        padding-left: 20px;
        font-size: 14px;
    }


    /* =========================
       CARD
    ========================= */

    .add-card {
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
    }


    /* =========================
       CARD HEADER
    ========================= */

    .card-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 24px 28px;
        border-bottom: 1px solid var(--border-color);
    }

    .card-label {
        display: block;
        color: var(--primary-green);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }

    .card-top h3 {
        margin: 0;
        color: var(--dark-text);
        font-size: 19px;
        font-weight: 700;
    }

    .member-icon {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ecfdf5;
        color: var(--primary-green);
        border: 1px solid #c7f5df;
        border-radius: 5px;
        font-size: 23px;
        font-weight: 500;
    }


    /* =========================
       FORM
    ========================= */

    .add-card form {
        padding: 28px;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-group > label {
        display: block;
        color: #374151;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-input {
        width: 100%;
        height: 48px;
        padding: 0 14px;
        background: #fff;
        color: var(--dark-text);
        border: 1px solid #d9dee5;
        border-radius: 5px;
        font-size: 14px;
        outline: none;
        transition: 0.2s ease;
    }

    .form-input::placeholder {
        color: #9ca3af;
    }

    .form-input:focus {
        border-color: var(--primary-green);
        box-shadow: 0 0 0 3px rgba(9, 204, 127, 0.10);
    }

    .field-error {
        margin-top: 6px;
        color: var(--danger);
        font-size: 13px;
    }


    /* =========================
       IMAGE UPLOAD
    ========================= */

    .upload-box {
        display: flex;
        align-items: center;
        gap: 14px;
        min-height: 78px;
        padding: 12px 14px;
        background: #fbfffd;
        border: 1px dashed #b9dfd0;
        border-radius: 6px;
    }

    .upload-icon {
        width: 44px;
        height: 44px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e9fff5;
        color: var(--primary-green);
        border-radius: 5px;
        font-size: 22px;
        font-weight: 700;
    }

    .upload-content {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .upload-content strong {
        color: var(--dark-text);
        font-size: 14px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .upload-content span {
        color: var(--muted-text);
        font-size: 12px;
    }

    .choose-btn {
        padding: 8px 14px;
        margin: 0;
        background: #fff;
        border: 1px solid #cfd6dd;
        color: #374151;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s ease;
        white-space: nowrap;
    }

    .choose-btn:hover {
        border-color: var(--primary-green);
        color: var(--primary-green);
    }

    .upload-box input[type="file"] {
        display: none;
    }


    /* =========================
       ACTIONS
    ========================= */

    .form-actions {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 10px;
        padding-top: 8px;
        border-top: 1px solid var(--border-color);
    }

    .cancel-btn,
    .save-btn {
        min-height: 44px;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .cancel-btn {
        background: #fff;
        border: 1px solid #d5d9de;
        color: #4b5563;
    }

    .cancel-btn:hover {
        background: #f5f6f7;
        color: #374151;
        text-decoration: none;
    }

    .save-btn {
        background: var(--primary-green);
        border: 1px solid var(--primary-green);
        color: #fff;
    }

    .save-btn:hover {
        background: var(--primary-green-dark);
        border-color: var(--primary-green-dark);
    }


    /* =========================
       TABLET
    ========================= */

    @media (max-width: 991px) {

        .add-team-page {
            margin-left: 0;
            padding: 30px 25px;
        }

    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 767px) {

        .add-team-page {
            padding: 25px 15px;
        }

        .page-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .page-header h2 {
            font-size: 24px;
        }

        .back-btn {
            width: 100%;
        }

        .card-top {
            padding: 20px;
        }

        .add-card form {
            padding: 20px;
        }

        .upload-box {
            flex-wrap: wrap;
        }

        .upload-content {
            max-width: calc(100% - 60px);
        }

        .choose-btn {
            width: 100%;
            text-align: center;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .cancel-btn,
        .save-btn {
            width: 100%;
            text-align: center;
        }

    }


    /* =========================
       SMALL MOBILE
    ========================= */

    @media (max-width: 480px) {

        .add-team-page {
            padding: 20px 12px;
        }

        .page-header h2 {
            font-size: 22px;
        }

        .card-top h3 {
            font-size: 17px;
        }

    }

</style>


<script>

    document.addEventListener('DOMContentLoaded', function () {

        const imageInput = document.getElementById('image');
        const fileName = document.getElementById('file-name');

        if (imageInput && fileName) {

            imageInput.addEventListener('change', function () {

                if (this.files && this.files.length > 0) {
                    fileName.textContent = this.files[0].name;
                } else {
                    fileName.textContent = 'Choose profile image';
                }

            });

        }

    });

</script>