<?php

include("config.php");

$resultCategory = mysqli_query($mysqli, "SELECT * FROM category_tb;");

$resultWriter = mysqli_query($mysqli, "SELECT * FROM writer_tb;");

$resultBook = mysqli_query($mysqli, "SELECT img FROM book_tb;");
?>

<html>
    <head>
        <title>Tambahkan Buku Abidd</title>
    </head>

    <body>
        <a href="index.php">Back</a>
        <br><h2>Silahkan Menambahkan Buku Baruu</h2><br>

        <form action="addBook.php" method="post" name="formAdd">
            <table>
                <tr>
                    <td>Judul Buku:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td><select id="category" name="category">
                        <?php
                        while($category = mysqli_fetch_array($resultCategory)){
                            echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>Penulis:</td>
                    <td><select id="writer" name="writer">
                        <?php
                        while($writer = mysqli_fetch_array($resultWriter)){
                            echo '<option value="'.$writer['id'].'">'.$writer['name'].'</option>';
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>Tahun Terbit:</td>
                    <td><input type="text" name="year" placeholder="angka 4 digit"></td>
                </tr>
                <tr>
                    <td>Gambar:</td>
                    <td><select id="img" name="img">
                        <?php
                        while($book = mysqli_fetch_array($resultBook)){
                            echo '<option value="'.$book['img'].'">'.$book['img'].'</option>';
                        }
                    ?></td>
                    <td><i><sub>*mohon maaf, pilihan gambar masih belum bisa ditambah.. hanya bisa memilih dari gambar yang ada :'(</sub></i></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br><br><input type="submit" name="Submit" value="Tambahkan Buku Baruu"></td>
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

                $result = mysqli_query($mysqli, "INSERT INTO book_tb VALUES ('', '$judulBuku', $categoryBuku, $writerBuku, $yearBuku, '$imgBuku');");

                echo "Buku Berhasil Ditambahkan. <a href='index.php'>Lihat Buku</a>";
            }
        ?>
    </body>
</html>

