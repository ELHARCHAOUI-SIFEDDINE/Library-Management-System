<?php
require('config.php');

$id = $_GET['id'];
$query = "SELECT * FROM books WHERE id = $id";
$result = mysqli_query($conn, $query);
$book = mysqli_fetch_assoc($result);

if (isset($_POST['update-btn'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre'];
    $pub_date = $_POST['pub_date'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $cover = $_POST['cover'];

    $update_query = "UPDATE books SET Title='$title', Author='$author', ISBN='$isbn', Genre='$genre', Publication='$pub_date', Quantity='$quantity', Descr='$description', cover='$cover' WHERE id=$id";
    if (mysqli_query($conn, $update_query)) {
        echo "Book updated successfully";
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
    }
}
?>

<?php
require_once('top.php');
?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        require_once('sidebar.php');
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php
                require_once('nav.php');
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2" style="margin-bottom: 1cm;">
                        <h1 class="h3 mb-0 text-gray-800">Edit Book</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Edit Book</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $book['Title']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" class="form-control" id="author" name="author" value="<?php echo $book['Author']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="isbn">ISBN</label>
                                            <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $book['ISBN']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="genre">Genre</label>
                                            <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $book['Genre']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pub_date">Publication Date</label>
                                            <input type="date" class="form-control" id="pub_date" name="pub_date" value="<?php echo $book['Publication']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $book['Quantity']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $book['Descr']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="cover">Cover Image URL</label>
                                            <input type="text" class="form-control" id="cover" name="cover" value="<?php echo $book['cover']; ?>" required>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" name="update-btn" class="btn btn-primary">Save</button>
                                            <a href="crud_book.php" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>