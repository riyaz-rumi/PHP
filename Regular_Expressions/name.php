<?php
    $message = '';
    if (isset($_POST['ok']))
    {
        $name = $_POST['name'];
        $name_pattern = '/^[a-zA-Z ]+$/i';
        if (empty($name))
            $message = '<i style="color: red">Please fill out the field!</i>';
        elseif (strlen($name) < 3)
            $message = '<i style="color: red">There must be more than 3 characters!</i>';
        elseif (!preg_match($name_pattern, $name))
            $message = '<i style="color: red">Please enter alphabets only!</i>';
        else
            $message = '<i style="color: green">Perfect!</a>';
    }
?>
<form method="POST">
    <input type="text" name="name"><?php echo $message; ?>
    <br><br>
    <input type="submit" name="ok">
</form>