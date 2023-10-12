<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Search Books</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="page-header text-center">Search Books</h1>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form method="GET">
                    <div class="mb-3">
                        <label for="search" class="form-label">Search by Title or Author</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Enter title or author">
                    </div>
                    <input type="submit" name="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <?php
    if (isset($_GET['submit'])) {
        $searchTerm = $_GET['search'];
        $data = file_get_contents('books.json');
        $books = json_decode($data, true);

        echo '<div class="container mt-3">';
        echo '<h2>Search Results:</h2>';
        echo '<ul>';
        foreach ($books as $book) {
            if (stripos($book['title'], $searchTerm) !== false || stripos($book['author'], $searchTerm) !== false) {
                echo '<li><strong>Title:</strong> ' . $book['title'] . '<br>';
                echo '<strong>Author:</strong> ' . $book['author'] . '<br>';
                echo '<strong>Pages:</strong> ' . $book['pages'] . '<br>';
                echo '<strong>ISBN:</strong> ' . $book['isbn'] . '<br>';
                echo '<strong>Available:</strong> ' . $book['available'] . '</li>';
                echo '<hr>';
            }
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>
</body>
</html>
