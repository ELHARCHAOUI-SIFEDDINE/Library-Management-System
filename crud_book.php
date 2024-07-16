<?php
require_once('top.php');
require_once('config.php'); // Include the database configuration file

$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        require_once('sidebar.php')
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php
                require_once('nav.php')
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-6">
                            <h3 class="h3 text-gray-800">Books</h3>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button type="button" class="btn btn-success" onclick="window.location.href = 'form_book.php';">Add Book</button>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Books</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>ISBN</th>
                                                    <th>Genre</th>
                                                    <th>Pub_Date</th>
                                                    <th>Quantity</th>
                                                    <th>Description</th>
                                                    <th>Cover</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- PHP Loop for Table Rows -->
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['Title'] . "</td>";
                                                    echo "<td>" . $row['Author'] . "</td>";
                                                    echo "<td>" . $row['ISBN'] . "</td>";
                                                    echo "<td>" . $row['Genre'] . "</td>"; // Added genre
                                                    echo "<td>" . $row['Publication'] . "</td>";
                                                    echo "<td>" . $row['Quantity'] . "</td>";
                                                    echo "<td class='description'>" . $row['Descr'] . "</td>";
                                                    echo "<td><img src='" . $row['cover'] . "' alt='Book Cover' width='100'></td>";

                                                    echo "<td class='text-center'>
                                                          <a href='edit_book.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='fas fa-edit'></i></a>
                                                          <a href='delete_book.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this book?\");'><i class='fas fa-trash'></i></a>
                                                          </td>";

                                                    echo "</tr>";
                                                }
                                                ?>
                                                <!-- End of PHP Loop -->
                                            </tbody>
                                        </table>
                                    </div>
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
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <style>
        .table tbody tr td.description {
            max-width: 200px;
            /* Set the maximum width for the description column */
            white-space: pre-wrap;
            /* Preserve whitespace and wrap text */
            word-wrap: break-word;
            /* Break long words */
        }

        .table tbody tr td.text-center {
            vertical-align: middle;
            /* Center icons vertically */
        }

        .btn-sm i {
            margin: 0 5px;
            /* Add some margin between icons */
        }
    </style>
</body>