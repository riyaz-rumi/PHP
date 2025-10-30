<?php
    $conn = mysqli_connect('localhost','root','', 'db_book');
    if(!$conn)
        die('ERROR: '.mysqli_connect_error());
?>