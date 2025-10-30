
<?php
    if (isset($_POST['name']) and $_POST['name'] != "" and isset($_POST['age']) and $_POST['age'] != "")
    {
        include "Connection.php";
        $name = $_POST['name'];
        $age = $_POST['age'];
        $insert = $obj->insert($name, $age);
        if ($insert)
            header('location: record.php');
    }
?>