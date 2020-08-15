<html>
    <head>
        <title>Tambahkan Kategori Buku Abidd</title>
    </head>

    <body>
        <a href="index.php">Back</a>
        <br><h2>Silahkan Menambahkan Kategori Buku</h2><br>

        <form action="addCategory.php" method="post" name="formAdd">
            <table>
                <tr>
                    <td>Nama Category:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br><br><input type="submit" name="Submit" value="Tambahkan Kategorii"></td>
                </tr>
            </table>
        </form>

        <?php
            include("config.php");

            if(isset($_POST['Submit'])){
                $categoryBuku = $_POST['name'];

                $result = mysqli_query($mysqli, "INSERT INTO category_tb VALUES ('', '$categoryBuku');");

                echo "Kategori Berhasil Ditambahkan.<br>untuk melihat apasaja kategori yang ada, silahkan ke halaman <a href='addBook.php'>TambahBuku</a> dan lihat pada dropdown 'Category'";
                echo "<br><br>Untuk kembali ke halaman utama, silahkan tekan Back pada Pojok Kiri Atas";
            }
        ?>
    </body>
</html>

