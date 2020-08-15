<?php

include("config.php");

$id = $_GET['id'];

$resultBook = mysqli_query($mysqli, "SELECT * FROM book_tb WHERE id = $id;");
$book = mysqli_fetch_array($resultBook);

$resultCategory = mysqli_query($mysqli, "SELECT t1.name FROM category_tb t1 INNER JOIN book_tb t2 ON t1.id = category_id WHERE t2.id = $id;");
$category = mysqli_fetch_array($resultCategory);

$resultWriter = mysqli_query($mysqli, "SELECT t1.name FROM writer_tb t1 INNER JOIN book_tb t2 ON t1.id = writer_id WHERE t2.id = $id;");
$writer = mysqli_fetch_array($resultWriter);

?>

<html>
    <head>
        <title>Detail Buku Abidd</title>
    </head>

    <body>
        <a href="index.php">Back</a>

        <h1><?= $book['name'] ?></h1>
        <img src="<?= $book['img'] ?>" height="500" width="350">
        <h3>Author: </h3><?= $writer['name'] ?>
        <h3>Genre: </h3><?= $category['name'] ?>
        <h3>Year Published: </h3><?= $book['publication_year'] ?>
    </body>
</html>