<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to YouLib</title>
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

        .header {
            background-color: #343a40;
            color: #ffffff;
            padding: 100px 0;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
        }

        .header p {
            font-size: 1.5rem;
        }

        .features {
            padding: 50px 0;
            text-align: center;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #ff8c00;
            /* Orange color */
        }

        .feature-title {
            font-size: 1.8rem;
            color: #343a40;
            margin-top: 20px;
        }

        .feature-description {
            color: #6c757d;
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

        /* Button Styles */
        .btn-login,
        .btn-register {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            margin-right: 10px;
        }

        .btn-login:hover,
        .btn-register:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #fff;
        }

        /* Animations */
        @keyframes slideFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideFromRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .navbar-nav {
                margin-top: 10px;
            }

            .btn-login,
            .btn-register {
                width: 100%;
                /* Make buttons full-width */
                margin-bottom: 10px;
                /* Add some spacing between buttons */
            }

            .feature-icon {
                color: #ff8c00;
                /* Orange color */
            }
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
                            <li><a class="dropdown-item" href="login_user.php"><i class="fas fa-user feature-icon"></i> Login as
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

    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1>Welcome to YouLib</h1>
            <p>Your gateway to an extensive collection of books and resources</p>
        </div>
    </header>

    <!-- Features -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-book-open feature-icon"></i>
                    <h2 class="feature-title">Extensive Collection</h2>
                    <p class="feature-description">Explore our extensive collection of books across various genres and
                        subjects.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-laptop feature-icon"></i>
                    <h2 class="feature-title">Read Anywhere</h2>
                    <p class="feature-description">Access our digital library from anywhere, anytime.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-graduation-cap feature-icon"></i>
                    <h2 class="feature-title">Learn and Grow</h2>
                    <p class="feature-description">Use our resources to learn new skills and grow your knowledge.</p>
                </div>
            </div>
        </div>
    </section>

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