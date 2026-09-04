@extends('admin.layouts.sidebar')

<div class="admin-dashboard">

    <div class="dashboard-container">

        {{-- =========================
             DASHBOARD HEADER
        ========================== --}}
        <div class="dashboard-header">

            <div>
                <span class="dashboard-label">ADMIN PANEL</span>

                <h1>Admin Dashboard</h1>

                <p>
                    Welcome back. Manage your organization's content and activities from here.
                </p>
            </div>

            <div class="dashboard-date">
                <span>Dashboard</span>
                <strong>Overview</strong>
            </div>

        </div>


        {{-- =========================
             OVERVIEW
        ========================== --}}
        <div class="section-title">
            <div>
                <h3>Overview</h3>
                <p>Quick access to your administration tools.</p>
            </div>
        </div>


        {{-- =========================
             DASHBOARD CARDS
        ========================== --}}
        <div class="dashboard-grid">


            {{-- Total Blogs --}}
            <div class="dashboard-card">

                <div class="card-header">

                    <div class="card-icon green-icon">
                        <i class="bi bi-journal-text"></i>
                    </div>

                    <span class="card-status">
                        Content
                    </span>

                </div>

                <div class="card-content">

                    <h2>
                        {{ $blogsCount ?? \App\Models\Blog::count() }}
                    </h2>

                    <h4>Total Blogs</h4>

                    <p>
                        View and manage all published blog posts.
                    </p>

                </div>

                <a
                    href="{{ route('admin.blogs.index') }}"
                    class="card-link"
                >
                    Manage Blogs
                    <span>→</span>
                </a>

            </div>


            {{-- Add Blog --}}
            <div class="dashboard-card">

                <div class="card-header">

                    <div class="card-icon green-icon">
                        <i class="bi bi-plus-lg"></i>
                    </div>

                    <span class="card-status">
                        Create
                    </span>

                </div>

                <div class="card-content">

                    <h2 class="action-number">
                        +
                    </h2>

                    <h4>Add New Blog</h4>

                    <p>
                        Create a new blog post and publish fresh content.
                    </p>

                </div>

                <a
                    href="{{ route('admin.blogs.create') }}"
                    class="card-link"
                >
                    Create Blog
                    <span>→</span>
                </a>

            </div>


            {{-- Team --}}
            <div class="dashboard-card">

                <div class="card-header">

                    <div class="card-icon green-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <span class="card-status">
                        Team
                    </span>

                </div>

                <div class="card-content">

                    <h2>
                        {{ $teamCount ?? \App\Models\Team::count() }}
                    </h2>

                    <h4>Team Members</h4>

                    <p>
                        Manage the people displayed on your team page.
                    </p>

                </div>

                <a
                    href="{{ route('admin.team.index') }}"
                    class="card-link"
                >
                    Manage Team
                    <span>→</span>
                </a>

            </div>

        </div>


        {{-- =========================
             LOWER SECTION
        ========================== --}}
        <div class="lower-grid">


            {{-- Admin Notes --}}
            <div class="notes-card">

                <div class="notes-header">

                    <div class="notes-icon">
                        <i class="bi bi-info-lg"></i>
                    </div>

                    <div>
                        <h3>Admin Notes</h3>
                        <p>Things to keep in mind.</p>
                    </div>

                </div>


                <div class="notes-list">

                    <div class="note-item">
                        <span class="check">✓</span>
                        <p>
                            Review new blog posts regularly to maintain content quality.
                        </p>
                    </div>

                    <div class="note-item">
                        <span class="check">✓</span>
                        <p>
                            Keep team member information and images up to date.
                        </p>
                    </div>

                    <div class="note-item">
                        <span class="check">✓</span>
                        <p>
                            Monitor website content and update important information when needed.
                        </p>
                    </div>

                    <div class="note-item">
                        <span class="check">✓</span>
                        <p>
                            Always log out when you have finished using the administration panel.
                        </p>
                    </div>

                </div>

            </div>


            {{-- Quick Actions --}}
            <div class="quick-card">

                <div class="quick-header">

                    <div>
                        <span class="dashboard-label">QUICK ACTIONS</span>
                        <h3>Get Started</h3>
                    </div>

                </div>


                <div class="quick-actions">

                    <a
                        href="{{ route('admin.blogs.create') }}"
                        class="quick-action"
                    >
                        <div class="quick-action-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>

                        <div>
                            <strong>Create Blog</strong>
                            <span>Publish a new article</span>
                        </div>

                        <b>→</b>
                    </a>


                    <a
                        href="{{ route('admin.team.create') }}"
                        class="quick-action"
                    >
                        <div class="quick-action-icon">
                            <i class="bi bi-person-plus"></i>
                        </div>

                        <div>
                            <strong>Add Team Member</strong>
                            <span>Add someone to your team</span>
                        </div>

                        <b>→</b>
                    </a>


                    <a
                        href="{{ route('admin.blogs.index') }}"
                        class="quick-action"
                    >
                        <div class="quick-action-icon">
                            <i class="bi bi-list-ul"></i>
                        </div>

                        <div>
                            <strong>View Blogs</strong>
                            <span>Review existing content</span>
                        </div>

                        <b>→</b>
                    </a>

                </div>

            </div>

        </div>


        {{-- =========================
             LOGOUT
        ========================== --}}
        <div class="logout-section">

            <div>
                <strong>Finished for now?</strong>
                <span>Make sure you safely sign out of the admin panel.</span>
            </div>

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >
                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >
                    <i class="bi bi-box-arrow-right"></i>
                    Log Out
                </button>

            </form>

        </div>

    </div>

</div>


<style>

    :root {
        --primary-green: #09CC7F;
        --primary-green-dark: #08b871;

        --dark-text: #202124;
        --body-text: #4b5563;
        --muted-text: #6b7280;

        --border-color: #e5e7eb;

        --light-bg: #f7f9f8;

        --danger: #dc3545;
    }


    * {
        box-sizing: border-box;
    }


    /* =========================
       DASHBOARD
    ========================== */

    .admin-dashboard {
        margin-left: 250px;
        min-height: 100vh;
        background: var(--light-bg);
        padding: 40px;
    }

    .dashboard-container {
        max-width: 1250px;
        margin: 0 auto;
    }


    /* =========================
       HEADER
    ========================== */

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 30px;
        margin-bottom: 40px;
    }

    .dashboard-label {
        display: block;
        color: var(--primary-green);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.2px;
        margin-bottom: 7px;
    }

    .dashboard-header h1 {
        margin: 0 0 8px;
        color: var(--dark-text);
        font-size: 32px;
        font-weight: 750;
        letter-spacing: -0.5px;
    }

    .dashboard-header p {
        margin: 0;
        color: var(--muted-text);
        font-size: 14px;
    }

    .dashboard-date {
        min-width: 130px;
        padding: 12px 15px;
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 6px;
    }

    .dashboard-date span {
        display: block;
        color: var(--muted-text);
        font-size: 11px;
        margin-bottom: 3px;
    }

    .dashboard-date strong {
        color: var(--dark-text);
        font-size: 13px;
    }


    /* =========================
       SECTION TITLE
    ========================== */

    .section-title {
        margin-bottom: 18px;
    }

    .section-title h3 {
        margin: 0 0 4px;
        color: var(--dark-text);
        font-size: 19px;
        font-weight: 700;
    }

    .section-title p {
        margin: 0;
        color: var(--muted-text);
        font-size: 13px;
    }


    /* =========================
       DASHBOARD GRID
    ========================== */

    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 24px;
    }


    /* =========================
       DASHBOARD CARD
    ========================== */

    .dashboard-card {
        display: flex;
        flex-direction: column;
        min-height: 270px;
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
        transition: 0.2s ease;
    }

    .dashboard-card:hover {
        border-color: #bcebd8;
        transform: translateY(-2px);
    }


    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 20px 0;
    }

    .card-icon {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        font-size: 20px;
    }

    .green-icon {
        background: #e9fff5;
        color: var(--primary-green);
        border: 1px solid #c7f5df;
    }

    .card-status {
        color: var(--muted-text);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }


    .card-content {
        flex: 1;
        padding: 22px 20px 20px;
    }

    .card-content h2 {
        margin: 0 0 4px;
        color: var(--dark-text);
        font-size: 36px;
        line-height: 1;
        font-weight: 750;
    }

    .card-content h2.action-number {
        color: var(--primary-green);
    }

    .card-content h4 {
        margin: 0 0 9px;
        color: var(--dark-text);
        font-size: 16px;
        font-weight: 700;
    }

    .card-content p {
        margin: 0;
        color: var(--muted-text);
        font-size: 13px;
        line-height: 1.6;
    }


    /* =========================
       CARD LINK
    ========================== */

    .card-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 20px;
        border-top: 1px solid var(--border-color);
        color: #087f50;
        background: #fcfffd;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .card-link span {
        font-size: 17px;
    }

    .card-link:hover {
        background: #e9fff5;
        color: #087f50;
        text-decoration: none;
    }


    /* =========================
       LOWER GRID
    ========================== */

    .lower-grid {
        display: grid;
        grid-template-columns: 1.25fr 0.75fr;
        gap: 18px;
        margin-bottom: 24px;
    }


    /* =========================
       NOTES
    ========================== */

    .notes-card,
    .quick-card {
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
    }

    .notes-header {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 20px;
        border-bottom: 1px solid var(--border-color);
    }

    .notes-icon {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e9fff5;
        border: 1px solid #c7f5df;
        color: var(--primary-green);
        border-radius: 5px;
        font-size: 18px;
    }

    .notes-header h3 {
        margin: 0 0 3px;
        color: var(--dark-text);
        font-size: 16px;
        font-weight: 700;
    }

    .notes-header p {
        margin: 0;
        color: var(--muted-text);
        font-size: 12px;
    }


    .notes-list {
        padding: 8px 20px;
    }

    .note-item {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        padding: 13px 0;
        border-bottom: 1px solid #f0f1f2;
    }

    .note-item:last-child {
        border-bottom: none;
    }

    .check {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 1px;
        background: #e9fff5;
        color: #087f50;
        border-radius: 50%;
        font-size: 11px;
        font-weight: 800;
    }

    .note-item p {
        margin: 0;
        color: var(--body-text);
        font-size: 13px;
        line-height: 1.55;
    }


    /* =========================
       QUICK ACTIONS
    ========================== */

    .quick-header {
        padding: 20px;
        border-bottom: 1px solid var(--border-color);
    }

    .quick-header h3 {
        margin: 0;
        color: var(--dark-text);
        font-size: 18px;
        font-weight: 700;
    }

    .quick-actions {
        padding: 7px 20px;
    }

    .quick-action {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 13px 0;
        border-bottom: 1px solid #f0f1f2;
        text-decoration: none;
    }

    .quick-action:last-child {
        border-bottom: none;
    }

    .quick-action:hover {
        text-decoration: none;
    }

    .quick-action-icon {
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f1fdf8;
        color: var(--primary-green);
        border: 1px solid #d8f8eb;
        border-radius: 5px;
    }

    .quick-action div:nth-child(2) {
        flex: 1;
        min-width: 0;
    }

    .quick-action strong {
        display: block;
        color: var(--dark-text);
        font-size: 13px;
        margin-bottom: 2px;
    }

    .quick-action span {
        display: block;
        color: var(--muted-text);
        font-size: 11px;
    }

    .quick-action b {
        color: #9ca3af;
        font-size: 16px;
        font-weight: 400;
        transition: 0.2s ease;
    }

    .quick-action:hover b {
        color: var(--primary-green);
        transform: translateX(3px);
    }


    /* =========================
       LOGOUT
    ========================== */

    .logout-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        padding: 18px 20px;
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
    }

    .logout-section strong {
        display: block;
        color: var(--dark-text);
        font-size: 14px;
        margin-bottom: 3px;
    }

    .logout-section span {
        display: block;
        color: var(--muted-text);
        font-size: 12px;
    }

    .logout-section form {
        margin: 0;
    }

    .logout-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        min-height: 42px;
        padding: 9px 17px;
        background: #fff1f2;
        border: 1px solid #fecdd3;
        color: var(--danger);
        border-radius: 5px;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s ease;
        white-space: nowrap;
    }

    .logout-btn:hover {
        background: var(--danger);
        border-color: var(--danger);
        color: #fff;
    }


    /* =========================
       TABLET
    ========================== */

    @media (max-width: 1100px) {

        .dashboard-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .lower-grid {
            grid-template-columns: 1fr;
        }

    }


    @media (max-width: 991px) {

        .admin-dashboard {
            margin-left: 0;
            padding: 30px 25px;
        }

    }


    /* =========================
       MOBILE
    ========================== */

    @media (max-width: 767px) {

        .admin-dashboard {
            padding: 25px 15px;
        }

        .dashboard-header {
            flex-direction: column;
            margin-bottom: 30px;
        }

        .dashboard-header h1 {
            font-size: 26px;
        }

        .dashboard-date {
            width: 100%;
        }

        .dashboard-grid {
            grid-template-columns: 1fr;
        }

        .dashboard-card {
            min-height: 245px;
        }

        .logout-section {
            align-items: flex-start;
            flex-direction: column;
        }

        .logout-section form,
        .logout-btn {
            width: 100%;
        }

    }


    /* =========================
       SMALL MOBILE
    ========================== */

    @media (max-width: 480px) {

        .admin-dashboard {
            padding: 20px 12px;
        }

        .dashboard-header h1 {
            font-size: 23px;
        }

        .dashboard-header p {
            font-size: 13px;
            line-height: 1.5;
        }

        .section-title h3 {
            font-size: 17px;
        }

        .card-content h2 {
            font-size: 32px;
        }

        .card-header {
            padding: 17px 17px 0;
        }

        .card-content {
            padding: 20px 17px;
        }

        .card-link {
            padding: 13px 17px;
        }

        .notes-header,
        .quick-header {
            padding: 17px;
        }

        .notes-list,
        .quick-actions {
            padding-left: 17px;
            padding-right: 17px;
        }

    }

</style>