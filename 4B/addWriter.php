<html>
    <head>
        <title>Tambahkan Nama Penuliss</title>
    </head>

    <body>
        <a href="index.php">Back</a>
        <br><h2>Silahkan Menambahkan Penulis Buku :D</h2><br>

        <form action="addWriter.php" method="post" name="formAdd">
            <table>
                <tr>
                    <td>Nama Penuliss:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br><br><input type="submit" name="Submit" value="Tambahkan Penulis"></td>
                </tr>
            </table>
        </form>

        <?php
            include("config.php");

            if(isset($_POST['Submit'])){
                $penulisBuku = $_POST['name'];

                $result = mysqli_query($mysqli, "INSERT INTO writer_tb VALUES ('', '$penulisBuku');");

                echo "Penulis Berhasil Ditambahkan.<br>untuk melihat siapa saja penulis yang ada, silahkan ke halaman <a href='addBook.php'>TambahBuku</a> dan lihat pada dropdown 'Penulis'";
                echo "<br><br>Untuk kembali ke halaman utama, silahkan tekan Back pada Pojok Kiri Atas";
            }
        ?>
    </body>
</html>

