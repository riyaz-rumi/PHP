<link rel="stylesheet" href="identity_validation.css">
<?php
    $fn_msg = '';
    $ln_msg = '';
    $date_msg = '';
    $mob_msg = '';
    $email_msg = '';
    /**************************************************************************************************************************************/        
    if (isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['date']) and isset($_POST['mobile']) and isset($_POST['email']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mob = $_POST['mobile'];
        $date = $_POST['date'];
        $email = $_POST['email'];
    /**************************************************************************************************************************************/        
        $fname_pattern = '/^[a-zA-Z]+$/i';
        $lname_pattern = '/^[a-zA-Z]+$/i';
        $mob_pattern = '/^[0-9]{10,12}+$/';
        $date_pattern = '/^[0-3][0-9]-[0-1][0-9]-[0-9]{4}+$/';
        $email_pattern = '/^[a-z0-9_.]+@(gmail|yahoo).(com|co.in|org)$/';
    /**************************************************************************************************************************************/        

        if (empty($fname))
            $fn_msg = '<i style="color: red">Please fill out the field!</i>';
        elseif (strlen($fname) < 3)
            $fn_msg = '<i style="color: red">There must be more than 3 characters!</i>';
        elseif (!preg_match($fname_pattern, $fname))
            $fn_msg = '<i style="color: red">Space is not allowed!</i>';
        else
            $fn_msg = '<i style="color: green">Perfect!</a>';
    /**************************************************************************************************************************************/        

        if (empty($lname))
            $ln_msg = '<i style="color: red">Please fill out the field!</i>';
        elseif (strlen($lname) < 3)
            $ln_msg = '<i style="color: red">There must be more than 3 characters!</i>';
        elseif (!preg_match($lname_pattern, $lname))
            $ln_msg = '<i style="color: red">Space is not allowed!</i>';
        else    
            $ln_msg = '<i style="color: green">Perfect!</a>';
    /**************************************************************************************************************************************/        

        if (empty($mob))
            $mob_msg = '<i style="color: red">Fill the field!</i>';
        elseif (!preg_match($mob_pattern, $mob) OR strlen($mob) == 11)
            $mob_msg = '<i style="color: red">Required 10 or 12 digits!</i>';
        else
            $mob_msg = '<i style="color: green">Perfect!</a>';
    /**************************************************************************************************************************************/        

        if (empty($date))
            $date_msg = '<i style="color: red">Fill the field!</i>';
        elseif (!preg_match($date_pattern, $date))
            $date_msg = '<i style="color: red">Syntax!</i>';
        else
            $date_msg = '<i style="color: green">Perfect!</a>';
    /**************************************************************************************************************************************/        
        if (empty($email))
            $email_msg = '<i style="color: red">Fill the field!</i>';
        elseif (strlen($email) < 10)
            $email_msg = '<i style="color: red">There must be more than 8 characters!</i>';
        elseif (!preg_match($email_pattern, $email))
            $email_msg = '<i style="color: red">Wrong Syntax!</i>';
        else
            $email_msg = '<i style="color: green">Perfect!</a>';
    }
?>
<div>
    <div id=main>
        <form method="POST" action="identity_validation.php">
            <h3>Identity Validation</h3>
            <input class='inputs' type="text" name="fname" Placeholder="First Name"><?php echo $fn_msg; ?>
            <br>
            <input class='inputs' type="text" name="lname" Placeholder="Last Name"><?php echo $ln_msg; ?>
            <br>
            <input class='inputs' type="text" name="date" Placeholder="Date Of Birth [dd-mm-yyyy]"><?php echo $date_msg; ?>
            <br>
            <input class='inputs' type="text" name="mobile" Placeholder="Mobile Number"><?php echo $mob_msg; ?>
            <br>
            <input class='inputs' type="text" name="email" Placeholder="Your E-mail"><?php echo $email_msg; ?>
            <br>
            <input class="action" type="submit" name="ok">
            <input class="action" type="reset">
        </form>    
    </div>
</div>
