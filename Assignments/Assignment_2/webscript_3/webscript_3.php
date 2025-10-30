<?php
    require('conn.php');
    $b_name = $_POST['book_name'];
    $b_publication = $_POST['book_publication'];
    $b_price = $_POST['book_price'];
    $ins_qry = "INSERT INTO `tbl_bookinfo` (`book_name`, `book_publication`, `book_price`) VALUES ('$b_name', '$b_publication', '$b_price')";
    mysqli_query($conn, $ins_qry);
    header('location: record.php');
?>