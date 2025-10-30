<?php
    $name = $_GET['name'];
    $conn = mysqli_connect('localhost','root','', 'db_students');
    $select = "SELECT * FROM `tbl_students` WHERE `Name` = '$name'";
    $result = mysqli_query($conn, $select);
    $r = mysqli_fetch_row($result);
    echo '<hr>';
    echo "<table border>
            <tr><th width=100px align=left>ID</th><td width=150px>".$r[0]."</td></tr>
            <tr><th width=100px align=left>Name</th><td width=150px>".$r[1]."</td></tr>
            <tr><th width=100px align=left>Age</th><td width=150px>".$r[2]."</td></tr>
            <tr><th width=100px align=left>Marks</th><td width=150px>".$r[3]."</td></tr>
        </table>";
    mysqli_free_result($result);
    mysqli_close($conn);
?>