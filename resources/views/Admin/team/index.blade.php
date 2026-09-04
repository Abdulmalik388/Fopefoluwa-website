@extends('admin.layouts.sidebar')

<div class="team-page">

    <div class="team-container">

        {{-- Page Header --}}
        <div class="page-header">
            <div>
                <h2>Team Members</h2>
                <p>Manage the members displayed on your website.</p>
            </div>

            <a href="{{ route('admin.team.create') }}" class="add-team-btn">
                <span>+</span> Add Team Member
            </a>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="success-alert">
                <span>✓</span>
                {{ session('success') }}
            </div>
        @endif

        {{-- Team Table --}}
        <div class="team-card">

            <div class="table-wrapper">
                <table class="team-table">

                    <thead>
                        <tr>
                            <th>Member</th>
                            <th>Post</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($team as $member)

                        <tr>

                            {{-- Member --}}
                            <td>
                                <div class="member-info">

                                    <div class="member-image">
                                        <img
                                            src="{{ asset($member->image) }}"
                                            alt="{{ $member->name }}"
                                        >
                                    </div>

                                    <div class="member-name">
                                        {{ $member->name }}
                                    </div>

                                </div>
                            </td>

                            {{-- Post --}}
                            <td>
                                <span class="post-text">
                                    {{ $member->post }}
                                </span>
                            </td>

                            {{-- Actions --}}
                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="{{ route('admin.team.edit', $member->id) }}"
                                        class="edit-btn"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.team.destroy', $member->id) }}"
                                        method="POST"
                                        class="delete-form"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="delete-btn"
                                            onclick="return confirm('Delete this member?')"
                                        >
                                            Delete
                                        </button>
                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="3">
                                <div class="empty-state">
                                    <div class="empty-icon">👥</div>
                                    <h4>No Team Members</h4>
                                    <p>You haven't added any team members yet.</p>

                                    <a
                                        href="{{ route('admin.team.create') }}"
                                        class="add-team-btn"
                                    >
                                        + Add Team Member
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

</div>


<style>

    :root {
        --primary-green: #09CC7F;
        --dark-text: #202124;
        --muted-text: #6b7280;
        --border-color: #e5e7eb;
        --light-bg: #f7f9f8;
        --danger: #dc3545;
    }

    * {
        box-sizing: border-box;
    }

    .team-page {
        margin-left: 250px;
        min-height: 100vh;
        background: var(--light-bg);
        padding: 40px;
    }

    .team-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* =========================
       PAGE HEADER
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
       ADD BUTTON
    ========================= */

    .add-team-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 18px;
        background: var(--primary-green);
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        border: 1px solid var(--primary-green);
        transition: 0.2s ease;
        white-space: nowrap;
    }

    .add-team-btn:hover {
        background: #08b871;
        color: #fff;
        text-decoration: none;
    }

    .add-team-btn span {
        font-size: 19px;
        line-height: 1;
    }

    /* =========================
       SUCCESS ALERT
    ========================= */

    .success-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #e9fff5;
        color: #087f50;
        border: 1px solid #b9f2d9;
        padding: 13px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .success-alert span {
        font-weight: 700;
    }

    /* =========================
       CARD
    ========================= */

    .team-card {
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
    }

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    /* =========================
       TABLE
    ========================= */

    .team-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 650px;
    }

    .team-table thead {
        background: #f8faf9;
    }

    .team-table th {
        padding: 16px 20px;
        text-align: left;
        color: #374151;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        border-bottom: 1px solid var(--border-color);
    }

    .team-table td {
        padding: 18px 20px;
        border-bottom: 1px solid var(--border-color);
        vertical-align: middle;
    }

    .team-table tbody tr:last-child td {
        border-bottom: none;
    }

    .team-table tbody tr:hover {
        background: #fbfdfc;
    }

    /* =========================
       MEMBER
    ========================= */

    .member-info {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .member-image {
        width: 58px;
        height: 58px;
        flex-shrink: 0;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #d8f8eb;
        background: #f1fffa;
    }

    .member-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .member-name {
        color: var(--dark-text);
        font-size: 15px;
        font-weight: 600;
    }

    /* =========================
       POST
    ========================= */

    .post-text {
        color: var(--muted-text);
        font-size: 14px;
    }

    /* =========================
       ACTIONS
    ========================= */

    .action-buttons {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .edit-btn,
    .delete-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 70px;
        padding: 8px 13px;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .edit-btn {
        background: #ecfdf5;
        color: #087f50;
        border: 1px solid #b9f2d9;
    }

    .edit-btn:hover {
        background: var(--primary-green);
        color: #fff;
        border-color: var(--primary-green);
        text-decoration: none;
    }

    .delete-form {
        margin: 0;
    }

    .delete-btn {
        background: #fff1f2;
        color: var(--danger);
        border: 1px solid #fecdd3;
    }

    .delete-btn:hover {
        background: var(--danger);
        color: #fff;
        border-color: var(--danger);
    }

    /* =========================
       EMPTY STATE
    ========================= */

    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-icon {
        font-size: 38px;
        margin-bottom: 12px;
    }

    .empty-state h4 {
        margin: 0 0 7px;
        color: var(--dark-text);
        font-size: 18px;
    }

    .empty-state p {
        margin: 0 0 20px;
        color: var(--muted-text);
        font-size: 14px;
    }

    /* =========================
       TABLET
    ========================= */

    @media (max-width: 991px) {

        .team-page {
            margin-left: 0;
            padding: 30px 25px;
        }

    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 767px) {

        .team-page {
            padding: 25px 15px;
        }

        .page-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .page-header h2 {
            font-size: 24px;
        }

        .add-team-btn {
            width: 100%;
        }

        .team-card {
            border-radius: 7px;
        }

        .team-table {
            min-width: 600px;
        }

        .team-table th,
        .team-table td {
            padding: 14px 15px;
        }

        .member-image {
            width: 50px;
            height: 50px;
        }

        .member-name {
            font-size: 14px;
        }

    }

    /* =========================
       SMALL MOBILE
    ========================= */

    @media (max-width: 480px) {

        .team-page {
            padding: 20px 12px;
        }

        .page-header h2 {
            font-size: 22px;
        }

        .page-header p {
            font-size: 13px;
        }

    }

</style>