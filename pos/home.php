<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Sidebar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      overflow-x: hidden;
    }

    .sidebar {
      height: 100vh;
      background-color: #343a40;
      padding-top: 20px;
    }

    .sidebar a {
      color: #ddd;
      display: block;
      padding: 10px 20px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
      color: #fff;
    }

    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block sidebar">
      <h4 class="text-white text-center">My Sidebar</h4>
      <a href="#">Dashboard</a>
      <a href="#">Profile</a>
      <a href="#">Settings</a>
      <a href="#">Logout</a>
    </nav>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 content">
      
  <h2 class="mb-4">Create User</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <form>

        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter your name">
        </div>

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Password">
        </div>

        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select">
            <option selected>Select role</option>
            <option>User</option>
            <option>Admin</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Message</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>

    </main>

  </div>
  
</div>

</body>
</html>