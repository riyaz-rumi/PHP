<?php
    // Connection to the Database
    $conn = mysqli_connect("localhost", "root", "", "db_employees");
    $update = "UPDATE `tbl_bookinfo` SET `` = '$updated_price' WHERE `book_price` = '$old_price'";
    mysqli_query($conn, $update);
?>