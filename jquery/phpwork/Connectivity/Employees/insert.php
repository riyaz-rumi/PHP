<?php
    require('conn.php');
    $name = $_POST['book_name'];
    $publication = $_POST['book_publication'];
    $price = $_POST['book_price'];
    $ins_query = "INSERT INTO `tbl_bookinfo` (`book_name`, `book_publication`, `book_price`) VALUES ('$name', '$publication', '$price')";    
    mysqli_query($conn, $ins_query);
    header('location: record.php');
?>
</div>