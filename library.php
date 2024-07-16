<?php
session_start();
include("config.php");

// Fetch books
$books_query = "SELECT id, Title, Author, ISBN, Genre, Publication, Quantity, Descr FROM books";
$books_result = $conn->query($books_query);

// Handle borrowing a book
if (isset($_POST['borrow'])) {
    $book_id = $_POST['book_id'];
    $user_id = $_SESSION['user_id']; // Assuming user ID is stored in session
    $borrowed_date = date("Y-m-d");

    $borrow_query = "INSERT INTO borrowed_books (user_id, book_id, borrowed_date) VALUES ('$user_id', '$book_id', '$borrowed_date')";
    $conn->query($borrow_query);

    $update_quantity_query = "UPDATE books SET Quantity = Quantity - 1 WHERE id = '$book_id'";
    $conn->query($update_quantity_query);

    header("Location: library.php");
    exit();
}

// Handle returning a book
if (isset($_POST['return'])) {
    $book_id = $_POST['book_id'];
    $user_id = $_SESSION['user_id']; // Assuming user ID is stored in session

    $return_query = "DELETE FROM borrowed_books WHERE user_id = '$user_id' AND book_id = '$book_id'";
    $conn->query($return_query);

    $update_quantity_query = "UPDATE books SET Quantity = Quantity + 1 WHERE id = '$book_id'";
    $conn->query($update_quantity_query);

    header("Location: library.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | YouLib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            font-size: 1.8rem;
            color: #ff8c00;
            font-family: 'Pacifico', cursive;
        }

        .navbar-brand:hover {
            color: #ffae42;
        }

        .container {
            flex: 1;
        }

        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .book-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .book-cover {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .btn-details {
            margin-top: 15px;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .btn-details:hover {
            filter: brightness(90%);
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
                    <li class="nav-item">
                        <a class="nav-link btn btn-register" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Books -->
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php while ($book = $books_result->fetch_assoc()) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $book['cover']; ?>" class="book-cover" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="book-title"><?php echo $book['Title']; ?></h5>
                            <a href="book_info.php?book_id=<?php echo $book['id']; ?>" class="btn btn-details">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
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