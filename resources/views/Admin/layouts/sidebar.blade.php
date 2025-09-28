<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      width: 240px;
      position: fixed;
      top: 0;
      left: 0;
      background: #0d6efd;
      padding-top: 20px;
    }
    .sidebar a {
      display: block;
      color: #fff;
      padding: 12px 20px;
      text-decoration: none;
      font-size: 16px;
      transition: background 0.3s;
    }
    .sidebar a:hover {
      background: #0b5ed7;
    }
    .content {
      margin-left: 240px;
      padding: 20px;
    }
    .sidebar h3 {
      color: #fff;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Admin Panel</h3>
    <a href="{{ route('admin.dashboard') }}">🏠 Home</a>
    <a href="{{ route('admin.blogs.create') }}">➕ Add Blog</a>
    <a href="{{ route('admin.blogs.index') }}">📄 Blogs</a>
    <a href="{{ route('admin.team.index') }}">  👥 Team</a>
    <a href="{{ route('admin.team.create') }}">  👥 Add Team </a>
    <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-danger btn-lg p-1" style="margin-left: 22px;" >
        Logout
    </button>
</form>

  </div>

  <!-- Main Content -->
  

</body>
</html>
