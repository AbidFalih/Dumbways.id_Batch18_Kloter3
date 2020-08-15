<?php

include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM book_tb;");
?>

<html>
    <head>
        <title>Library Abidd</title>
    </head>

    <body>
        <a href="addBook.php">Add a Book</a> <br>
        <a href="addCategory.php">Add a Category</a> <br>
        <a href="addWriter.php">Add a Writer</a> <br><br>

        *click book's image for detail <br><br>

        <table border="1">
            <tr>
            <?php
                $i = 1;
                while($book_data = mysqli_fetch_array($result)){
                    $author_data = mysqli_query($mysqli, "SELECT t1.name FROM writer_tb t1 INNER JOIN book_tb ON writer_id = t1.id WHERE t1.id = ".$book_data['writer_id'].";");
                    $author = mysqli_fetch_array($author_data);
                    
                    echo '<td>
                        <a href="detailBook.php?id='.$book_data['id'].'"><img src="'.$book_data['img'].'" width="150" length="200"></a><br>'
                        .$book_data['name'].'<br>'
                        .$book_data['publication_year'].'<br>'.$author['name'].'<br><br>
                        <a href="updateBook.php?id='.$book_data['id'].'">Update</a><br>
                        <a href="deleteBook.php?id='.$book_data['id'].'">Delete</a><br><br>
                        </td>';
                    
                    if (!($i++%4)){
                        echo '</tr><tr>';
                    }
                    else {
                        echo '<td><h2>&nbsp &nbsp &nbsp</h2></td>';
                    }
                }
            ?></tr>
        </table>
    </body>
</html>



<?php
/*source:
https://stackoverflow.com/questions/26065495/php-echo-to-display-image-html
https://www.quackit.com/html/howto/how_to_resize_images_in_html.cfm#:~:text=To%20resize%20an%20image%20in,CSS%20properties%20to%20resize%20images.&text=This%20should%20be%20at%20its,narrow%20and%20has%20resized%20it.
https://www.w3schools.com/html/html_form_elements.asp
https://www.w3schools.com/tags/att_input_placeholder.asp
https://www.w3schools.com/html/html_formatting.asp
https://stackoverflow.com/questions/3518002/how-can-i-set-the-default-value-for-an-html-select-element
*/
?>