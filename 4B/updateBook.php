<?php

    include("config.php");

    //digunakan untuk dropdown
    $resultCategory = mysqli_query($mysqli, "SELECT * FROM category_tb;");
    $resultWriter = mysqli_query($mysqli, "SELECT * FROM writer_tb;");
    $resultBook = mysqli_query($mysqli, "SELECT img FROM book_tb;");

    //digunakan untuk mengisi form-nya
    $id = $_GET['id'];
    $getResultBook = mysqli_query($mysqli, "SELECT * FROM book_tb WHERE id = $id;");
    $getBook = mysqli_fetch_array($getResultBook);
    $getCategoryBook = mysqli_query($mysqli, "SELECT t1.id FROM category_tb t1 INNER JOIN book_tb t2 ON t1.id = category_id WHERE t2.id = $id;");
    $getCategory = mysqli_fetch_array($getCategoryBook);
    $getWriterBook = mysqli_query($mysqli, "SELECT t1.id FROM writer_tb t1 INNER JOIN book_tb t2 ON t1.id = writer_id WHERE t2.id = $id;");
    $getWriter = mysqli_fetch_array($getWriterBook);

?>

<html>
    <head>
        <title>Update Buku</title>
    </head>

    <body>
        <a href="index.php">Back</a>
        <br><h2>Silahkan Mengedit Informasi pada Buku berikut:</h2><br>

        <form action="updateBook.php?id='<?= $id?>'" method="post" name="formUpdate">
            <table>
                <tr>
                    <td>Judul Buku:</td>
                    <td><input type="text" name="name" value="<?= $getBook['name']?>"></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td><select id="category" name="category">
                        <?php
                        while($category = mysqli_fetch_array($resultCategory)){
                            if ($category['id'] == $getCategory['id']){
                                echo '<option value="'.$category['id'].'" selected="selected">'.$category['name'].'</option>';
                            }
                            else {
                                echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                            }
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>Penulis:</td>
                    <td><select id="writer" name="writer">
                        <?php
                        while($writer = mysqli_fetch_array($resultWriter)){
                            if ($writer['id'] == $getWriter['id']){
                                echo '<option value="'.$writer['id'].'" selected="selected">'.$writer['name'].'</option>';
                            }
                            else {
                            echo '<option value="'.$writer['id'].'">'.$writer['name'].'</option>';
                            }
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>Tahun Terbit:</td>
                    <td><input type="text" name="year" placeholder="angka 4 digit" value="<?= $getBook['publication_year']?>"></td>
                </tr>
                <tr>
                    <td>Gambar:</td>
                    <td><select id="img" name="img">
                        <?php
                        while($book = mysqli_fetch_array($resultBook)){
                            if ($book['img'] == $getBook['img']){
                                echo '<option value="'.$book['img'].'" selected="selected">'.$book['img'].'</option>';
                            }
                            else {
                                echo '<option value="'.$book['img'].'">'.$book['img'].'</option>';
                            }
                        }
                    ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br><br><input type="submit" name="Submit" value="Update Buku"></td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['Submit'])){
                $judulBuku = $_POST['name'];
                $categoryBuku = $_POST['category'];
                $writerBuku = $_POST['writer'];
                $yearBuku = $_POST['year'];
                $imgBuku = $_POST['img'];
        
                $result = mysqli_query($mysqli, "UPDATE book_tb SET name='$judulBuku', category_id=$categoryBuku, writer_id=$writerBuku, publication_year=$yearBuku, img='$imgBuku' WHERE id=$id;");

                header("Location:index.php");
            }
        ?>
    </body>
</html>

