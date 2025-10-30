<?php
    $name_err = "";
    $pwd_err = "";
    if (isset($_POST['login']))
    {
        $username = $_POST['unm'];
        $password = $_POST['pwd'];
        if ($username == "")
        {
            $name_err = "Please, fill the field!";
        }
        if ($password == "")
        {
            $pwd_err = "Please, fill the field!";
        }
        elseif ($password != "Roy007")
        {
            $pwd_err = "Wrong Password!";
        }
        if ($username == "Roy Disney" and $password == "Roy007")
        {
            session_start();
            $_SESSION['username'] = 'Roy Disney';
            header("location: welcome.php");
        }
        else
        {
            $err = 'Something went wrong!';
        }
    }
    ?>
<form method=POST>
    <h2>Login</h2>
    <label>Username : <input name=unm type=text /></label><?php echo $name_err;?>
    <br /><br />
    <label>Password : <input name=pwd type=password /></label><?php echo $pwd_err;?>
    <br /><br />
    <input name=login type=submit />
    <br /><br />
    <?php $err;?>
</form>