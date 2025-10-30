<?php
    require('conn.php');
    $old_publication = $_POST['old_publication'];
    $up_publication = $_POST['updated_publication'];
    $update = "UPDATE `tbl_bookinfo` SET `book_publication` = '$up_publication' WHERE `book_publication` = '$old_publication'";
    mysqli_query($conn, $update);
    header("location: record.php")
?>