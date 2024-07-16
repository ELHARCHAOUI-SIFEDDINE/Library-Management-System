<?php
require('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM books WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "Book deleted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header("Location: crud_book.php");
    exit();
} else {
    header("Location: crud_book.php");
    exit();
}
