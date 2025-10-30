<title>Update Book Info</title>
<link href="webscript_4.css" rel="stylesheet" />
<?php
    require("conn.php");
    $id = $_GET['id'];
    $old_qry = "SELECT * FROM `tbl_bookinfo` WHERE `tbl_bookinfo`.`book_id` = '$id'";
    $sel_qry = mysqli_query($conn, $old_qry);
    $r = mysqli_fetch_row($sel_qry);
    if(isset($_POST['up']))
    {
        $up_name = $_POST['up_name'];
        $up_date = $_POST['up_publication'];
        $up_price = $_POST['up_price'];
        $update = "UPDATE `tbl_bookinfo` SET `book_name` = '$up_name', `book_publication` = '$up_date', `book_price` = '$up_price' WHERE `book_id` = '$id'";
        mysqli_query($conn, $update);
        header('location: record.php');
    }
?>
<div>
    <form action="" method="POST">
        <h2>Update Book Info</h2>
        <pre>
            Book Name           : <input type="text" maxlength="30" name="up_name" value="<?php echo $r[1]?>">
            Book Publication  : <input type="text" maxlength="10" name="up_publication" value="<?php echo $r[2]?>">
            Book Price            : <input type="number" max="10000" name="up_price" value="<?php echo $r[3]?>">
        </pre>
        <input type="submit" id="go" value="Update" name="up"/>
        <input type="reset" id="reset" value="Reset" />
    </form>
</div>