<?php
    $conn = mysqli_connect("localhost", "root", "", "db_employees");
    if(!$conn)
        die('ERROR: '.mysqli_connect_error());
?>