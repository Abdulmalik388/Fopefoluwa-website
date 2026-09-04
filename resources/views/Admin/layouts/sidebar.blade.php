<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        :root {
            --primary-green: #09CC7F;
            --primary-green-dark: #07b56f;
            --danger-red: #dc3545;
            --white: #ffffff;
            --light-bg: #f7faf9;
            --text-dark: #1f2937;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--light-bg);
            color: var(--text-dark);
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background: var(--primary-green);
            z-index: 1050;

            display: flex;
            flex-direction: column;

            padding: 25px 15px;

            transition: transform 0.3s ease;
        }

        /* Logo / Admin title */

        .sidebar-header {
            padding: 5px 10px 30px;
            text-align: center;
        }

        .sidebar-header h3 {
            margin: 0;
            color: var(--white);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .sidebar-header p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 13px;
            margin: 5px 0 0;
        }

        /* Navigation */

        .sidebar-nav {
            flex: 1;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 13px;

            width: 100%;

            color: var(--white);
            text-decoration: none;

            padding: 13px 15px;
            margin-bottom: 5px;

            font-size: 15px;
            font-weight: 500;

            border-radius: 8px;

            transition:
                background 0.2s ease,
                transform 0.2s ease;
        }

        .sidebar-nav a:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(3px);
        }

        .sidebar-nav a.active {
            background: var(--white);
            color: var(--primary-green);
        }

        .nav-icon {
            width: 24px;
            min-width: 24px;
            text-align: center;
            font-size: 18px;
        }

        /* Logout */

        .sidebar-footer {
            padding-top: 15px;
        }

        .logout-btn {
            width: 100%;
            border: none;

            background: var(--danger-red);
            color: var(--white);

            padding: 12px 15px;

            border-radius: 8px;

            font-size: 15px;
            font-weight: 600;

            transition:
                background 0.2s ease,
                transform 0.2s ease;
        }

        .logout-btn:hover {
            background: #bb2d3b;
            transform: translateY(-1px);
        }

        /* =========================
           MOBILE TOP BAR
        ========================= */

        .mobile-navbar {
            display: none;

            position: fixed;
            top: 0;
            left: 0;

            width: 100%;
            height: 65px;

            background: var(--white);

            border-bottom: 1px solid #e5e7eb;

            z-index: 1040;

            align-items: center;
            justify-content: space-between;

            padding: 0 18px;
        }

        .mobile-navbar-title {
            color: var(--primary-green);
            font-size: 19px;
            font-weight: 700;
            margin: 0;
        }

        .hamburger-btn {
            width: 43px;
            height: 43px;

            border: none;
            background: var(--primary-green);
            color: var(--white);

            border-radius: 7px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;

            cursor: pointer;

            transition: background 0.2s ease;
        }

        .hamburger-btn:hover {
            background: var(--primary-green-dark);
        }

        /* =========================
           MOBILE CLOSE BUTTON
        ========================= */

        .close-sidebar {
            display: none;

            position: absolute;

            top: 18px;
            right: 15px;

            width: 35px;
            height: 35px;

            border: none;
            background: rgba(255, 255, 255, 0.15);

            color: var(--white);

            border-radius: 6px;

            font-size: 20px;

            cursor: pointer;
        }

        /* =========================
           OVERLAY
        ========================= */

        .sidebar-overlay {
            display: none;

            position: fixed;
            inset: 0;

            background: rgba(0, 0, 0, 0.4);

            z-index: 1045;
        }

        .sidebar-overlay.show {
            display: block;
        }

        /* =========================
           MAIN CONTENT
        ========================= */

        .content {
            margin-left: 250px;
            padding: 30px;
            min-height: 100vh;
        }

        /* =========================
           TABLET / MOBILE
        ========================= */

        @media (max-width: 991px) {

            .sidebar {
                width: 270px;

                transform: translateX(-100%);

                box-shadow: 5px 0 20px rgba(0, 0, 0, 0.08);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .mobile-navbar {
                display: flex;
            }

            .close-sidebar {
                display: flex;

                align-items: center;
                justify-content: center;
            }

            .content {
                margin-left: 0;
                padding: 90px 20px 30px;
            }
        }

        /* =========================
           SMALL MOBILE
        ========================= */

        @media (max-width: 575px) {

            .mobile-navbar {
                height: 60px;
                padding: 0 14px;
            }

            .mobile-navbar-title {
                font-size: 17px;
            }

            .hamburger-btn {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }

            .sidebar {
                width: 85%;
                max-width: 300px;
            }

            .content {
                padding: 80px 15px 25px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         MOBILE NAVBAR
    ========================= -->

    <div class="mobile-navbar">

        <h5 class="mobile-navbar-title">
            Admin Panel
        </h5>

        <button
            type="button"
            class="hamburger-btn"
            onclick="openSidebar()"
            aria-label="Open menu"
        >
            ☰
        </button>

    </div>


    <!-- =========================
         SIDEBAR OVERLAY
    ========================= -->

    <div
        class="sidebar-overlay"
        id="sidebarOverlay"
        onclick="closeSidebar()"
    ></div>


    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar" id="sidebar">

        <!-- Close button - Mobile only -->

        <button
            type="button"
            class="close-sidebar"
            onclick="closeSidebar()"
            aria-label="Close menu"
        >
            ×
        </button>


        <!-- Sidebar Header -->

        <div class="sidebar-header">

            <h3>
                Admin Panel
            </h3>

            <p>
                Fopefoluwa Foundation
            </p>

        </div>


        <!-- Navigation -->

        <nav class="sidebar-nav">

            <a href="{{ route('admin.dashboard') }}">
                <span class="nav-icon">⌂</span>
                <span>Home</span>
            </a>


            <a href="{{ route('admin.blogs.create') }}">
                <span class="nav-icon">+</span>
                <span>Add Blog</span>
            </a>


            <a href="{{ route('admin.blogs.index') }}">
                <span class="nav-icon">▤</span>
                <span>Blogs</span>
            </a>


            <a href="{{ route('admin.team.index') }}">
                <span class="nav-icon">♙</span>
                <span>Team</span>
            </a>


            <a href="{{ route('admin.team.create') }}">
                <span class="nav-icon">+</span>
                <span>Add Team</span>
            </a>

        </nav>


        <!-- Logout -->

        <div class="sidebar-footer">

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >
                    Logout
                </button>

            </form>

        </div>

    </aside>


    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main class="content">

        {{-- Your page content will go here --}}

    </main>


    <!-- =========================
         SIDEBAR JAVASCRIPT
    ========================= -->

    <script>

        function openSidebar() {

            document
                .getElementById('sidebar')
                .classList.add('show');

            document
                .getElementById('sidebarOverlay')
                .classList.add('show');

            document.body.style.overflow = 'hidden';
        }


        function closeSidebar() {

            document
                .getElementById('sidebar')
                .classList.remove('show');

            document
                .getElementById('sidebarOverlay')
                .classList.remove('show');

            document.body.style.overflow = '';
        }


        /*
         * Automatically close the mobile menu
         * when the screen becomes desktop size.
         */

        window.addEventListener('resize', function () {

            if (window.innerWidth > 991) {

                closeSidebar();

            }

        });


        /*
         * Close sidebar when clicking a navigation link
         * on mobile.
         */

        document
            .querySelectorAll('.sidebar-nav a')
            .forEach(function (link) {

                link.addEventListener('click', function () {

                    if (window.innerWidth <= 991) {

                        closeSidebar();

                    }

                });

            });

    </script>

</body>
</html>