<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add New Book</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <h1 class="page-header text-center">Add New Book</h1>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8"><a href="index.php">Back</a>
                <form method="POST">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pages</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pages" name="pages">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">ISBN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="isbn" name="isbn">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Available</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="available" name="available">
                        </div>
                    </div>
                    <input type="submit" name="save" value="Save" class="btn-btn-primary">
                    </forms>
            </div>
            <div class=" col-5">
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['save'])) {
        //open the json file
        $data = file_get_contents('books.json');
        $data = json_decode($data);

        //data in out POST
        $input = array(
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'pages' => $_POST['pages'],
            'isbn' => $_POST['isbn'],
            'available' => $_POST['available']
        );

        //append the input to our array
        $data[] = $input;
        //encode back to json
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('books.json', $data);

        header('location: index.php');
    }
    ?>
</body>

</html>