<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bookshop</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 style="color: navy;" class="page-header text-center">Book List</h1>

        <div class="row">
            <div class="col-12">
                <a href="add.php" class="btn btn-primary">Add</a>
                <table class="table table-bordered table-striped" style="margin-top: 20px;">
                    <thead>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Pages</th>
                        <th>ISBN</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        // fetch data from json
                        $data = file_get_contents('books.json');
                        // decode into php array
                        $data = json_decode($data);

                        $index = 0;

                        foreach ($data as $row) {

                            echo "
                            <tr>
                            <td>" . $row->title . "</td>
                            <td>" . $row->author . "</td>
                            <td>" . $row->pages . "</td>
                            <td>" . $row->isbn . "</td>
                            <td>" . $row->available . " </td>
                            <td> <a href='edit.php?index=".$index."' class='btn btn-success btn-sm'>Edit</a> 
                            <a href='delete.php?index=".$index."' class=' btn btn-danger btn-sm'>Delete</a>
                            </td>

                            </tr>
                            ";
                            $index++;
                        }
                        ?>
                        <!-- <tr>
                            <td>To Kill A Mockingbird</td>
                            <td>Harper Lee</td>
                            <td>336</td>
                            <td>9780061120084</td>
                            <td>Available</td>
                            <td> 
                            <a href='' class='btn btn-success btn-sm'>Edit</a> 
                            <a href='' class=' btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
<!-- 
//index.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP JSON File CRUD (Create Read Update and Delete)</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">PHP JSON File CRUD (Create Read Update and Delete)</h1>
    <div class="row">
        <div class="col-12">
            <a href="add.php" class="btn btn-primary">Add</a>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        //fetch data from json
                        $data = file_get_contents('members.json');
                        //decode into php array
                        $data = json_decode($data);
 
                        $index = 0;
                        foreach($data as $row){
                            echo "
                                <tr>
                                    <td>".$row->id."</td>
                                    <td>".$row->firstname."</td>
                                    <td>".$row->lastname."</td>
                                    <td>".$row->address."</td>
                                    <td>
                                        <a href='edit.php?index=".$index."' class='btn btn-success btn-sm'>Edit</a>
                                        <a href='delete.php?index=".$index."' class='btn btn-danger btn-sm'>Delete</a>
                                    </td>
                                </tr>
                            ";
 
                            $index++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html> -->