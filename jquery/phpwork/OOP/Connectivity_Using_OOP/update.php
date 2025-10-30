<?php
    if (isset($_POST['update']))
    {
        include "Connection.php";
        /******************************************/
        $ID = $_GET['id'];
        $name = $_GET['name'];
        $age = $_GET['age'];
        /******************************************/
        $new_name = $_POST['new_name'];
        $new_age = $_POST['new_age'];
        $update = $obj->update($ID, $new_name, $new_age);
        if ($update)
            header('location: record.php');
    }
?>
<form method="POST">
    <input type="text" maxlength="15" placeholder="Name" name="new_name" value='<?php echo $_GET['name'];?>'>
    <br><br>
    <input type="number" max="70" placeholder="Age" name="new_age" value='<?php echo $_GET['age'];?>'>
    <br><br>
    <input type="submit" value="Submit" name="update">
</form>
