<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            margin-top: -15px;
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            padding: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-control {
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
            width: 100%;
            font-size: 14px;
            padding: 8px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add New User
                    </div>
                    <div class="card-body">
                        <form method="POST" action="form_user.php">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="title">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control" id="Email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cover">cover</label>
                                        <input type="text" class="form-control" id="cover" name="cover" placeholder="cover">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="insert-btn">Add user</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>