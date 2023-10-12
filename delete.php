<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //get title
    $index = $_GET['index'];
 
    //fetch data from json
    $data = file_get_contents('books.json');
    $data = json_decode($data);
 
    //delete the row with the index
    unset($data[$index]);
 
    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('books.json', $data);
 
    header('location: index.php');
?>
</body>
</html>