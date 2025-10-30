<title>Webscript 1</title>
<link href="webscript_1.css" rel="stylesheet" />
<div>
<?php
    require('conn.php');
    $b_name = $_POST['book_name'];
    $b_publication = $_POST['book_publication'];
    $b_price = $_POST['book_price'];
    $ins_qry = "INSERT INTO `tbl_bookinfo` (`book_name`, `book_publication`, `book_price`) VALUES ('$b_name', '$b_publication', '$b_price')";
    mysqli_query($conn, $ins_qry);
    echo "Record inserted successfully!";
    echo "<hr /><a href=webscript_1.html>Add another record</a>";
?>
</div>