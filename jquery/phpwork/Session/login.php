<?php
    
    $nm_err = "";
    $pwd_err = "";
    $nm_cnt = "Fail";
    $pwd_cnt = "Fail";
    $id = 0;
    $ERROR = "";
    /********************************* VALIDATION START ****************************************/
    if (isset($_POST['unm']))
    {
        $username = $_POST['unm'];
        if ($username == "")
            $nm_err = "Please, fill the field!";
    }
    if (isset($_POST['pwd']))
    {
        $password = $_POST['pwd'];
        if ($password == "")
            $pwd_err = "Please, fill the field!";
    }
    /******************************** VALIDATION COMPLETE **************************************/
    
    /******************************** DATABASE CONNECTION **************************************/
    if (isset($_POST['login']) and $username != "" and $password != "")
    {
        $conn = @mysqli_connect("localhost", "root", "", "db_login");
        if (!$conn)
        {
            echo 'ERROR : '.mysqli_connect_error();
            exit;
        }
        $sel = "SELECT * FROM `tbl_login`";
        $result = mysqli_query($conn, $sel);
        while ($r = mysqli_fetch_row($result))
        {
            if ($username == $r[0])
            {
                $nm_cnt = "success";
                if ($password == $r[1])
                {
                    $pwd_cnt = "success";
                    $id = $r[2]; 
                }
            }
        }
        /******************************** SESSION CREATION **************************************/
        if ($nm_cnt == "success" && $pwd_cnt == "success")
        {   
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        }
        /******************************** ERROR HANDLING ****************************************/
        /*
        if ($nm_cnt == 0 and $pwd_cnt == 0)
            $ERROR = "Both fields are invalid!";        
        else
        {
            if ($nm_cnt == 0)
                $nm_err = "<i>Username was invalid!</i>";
            if ($pwd_cnt == 0)
                $pwd_err = "<i>Password was wrong!</i>";
        }
        */
    }
    ?>
<form method=POST>
    <h2>Login</h2>
    <label>Username : <input name=unm type=text /></label><?php echo $nm_err;?>
    <br /><br />
    <label>Password : <input name=pwd type=password /></label><?php echo $pwd_err;?>
    <br /><br />
    <input name=login type=submit value=Login />
    <br /><br />
    <?php echo $ERROR;?>
</form>