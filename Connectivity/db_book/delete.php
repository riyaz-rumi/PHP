<?php
    require('conn.php');
    $new_name = $_POST['book_name'];
    $del_query = "DELETE FROM  `tbl_bookinfo` WHERE `book_name` = '$new_name'";    
    mysqli_query($conn, $del_query);
    header('location: record.php');
?>
</div>