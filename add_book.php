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
                        Add New Book
                    </div>
                    <div class="card-body">
                        <form method="POST" action="form_book.php">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control" id="author" name="author" placeholder="Author" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="genre">Genre</label>
                                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="publication_date">Publication Date</label>
                                <input type="date" class="form-control" id="publication_date" name="pub_date">
                            </div>
                            <div class="form-group">
                                <label for="quantity_available">Quantity Available</label>
                                <input type="number" class="form-control" id="quantity_available" name="quantity" min="1" value="1">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="2" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="cover_image">Cover Image URL</label>
                                <input type="text" class="form-control" id="cover_image" name="cover" placeholder="Cover Image URL">
                            </div>
                            <button type="submit" class="btn btn-primary" name="insert-btn">Add Book</button>
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