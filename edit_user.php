<?php
require('config.php');

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if (isset($_POST['update-btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cover = $_POST['cover'];

    $update_query = "UPDATE users SET username='$username', email='$email', phone='$phone', cover='$cover' WHERE id=$id";
    if (mysqli_query($conn, $update_query)) {
        echo "User updated successfully";
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
                        <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="username">username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user['phone']; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="cover">Cover Image URL</label>
                                            <input type="text" class="form-control" id="cover" name="cover" value="<?php echo $user['cover']; ?>" required>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" name="update-btn" class="btn btn-primary">Save</button>
                                            <a href="crud_user.php" class="btn btn-secondary">Cancel</a>
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