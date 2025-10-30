<?php
    if (isset($_GET['id']))
    {
        include "Connection.php";
        $ID = $_GET['id'];
        $delete = $obj->delete($ID);
        if ($delete)
            header('location: record.php');
    }
?>