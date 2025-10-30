<?php
    require("conn.php");
    require("record.php");
    $id = $_GET['id'];
    $del_qry = "DELETE FROM `tbl_bookinfo` WHERE `book_id` = '$id'";
    mysqli_query($conn, $del_qry);
    header('location: record.php');
?>