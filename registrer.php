<?php
require('config.php');

// Handle form submission
if (isset($_POST['registrer-btn'])) {
  // Retrieve form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $cover = $_POST['cover'];

  // Prepare and execute the query
  $query = "INSERT INTO users (username, email, pass, phone, cover) VALUES ('$username', '$email', '$password', '$phone', '$cover')";
  $result = mysqli_query($conn, $query);

  // Check if the query was successful
  if ($result) {
    // Redirect to login page or any other page
    header("Location: login_user.php");
    exit;
  } else {
    $error = "Error: " . mysqli_error($conn);
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | YouLib</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Custom Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .navbar {
      background-color: #343a40;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar-brand {
      font-size: 1.8rem;
      color: #ff8c00;
      /* Orange color */
      font-family: 'Pacifico', cursive;
    }

    .navbar-brand:hover {
      color: #ffae42;
      /* Lighter shade of orange */
    }

    .footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
      position: relative;
      bottom: 0;
      width: 100%;
    }

    .footer p {
      font-size: 1rem;
    }

    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      font-size: 1.2rem;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }

    .btn-login,
    .btn-register {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: #007bff;
      color: #fff;
      transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
    }

    .btn-login:hover,
    .btn-register:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">YouLib</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="nav-link btn btn-login dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </button>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="login_user.php"><i class="fas fa-user feature-icon"></i>
                  Login as
                  User</a></li>
              <li><a class="dropdown-item" href="login_user.php"><i class="fas fa-user-tie feature-icon"></i> Login as
                  Admin</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-register" href="registrer.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Registration Form -->
  <div class="container mt-5">
    <div class="form-container">
      <h2 class="text-center mb-4">Register</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="form-group">
          <input type="file" name="cover" id="cover" class="form-control" accept="image/*" required>
        </div>
        <button name="registrer-btn" type="submit" class="btn btn-register">Register</button>
      </form>

    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 YouLib. All rights reserved.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>