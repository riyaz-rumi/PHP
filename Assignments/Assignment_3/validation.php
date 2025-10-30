<?php
    $fn_msg = '';
    $ln_msg = '';
    $date_msg = '';
    $address_msg = '';
    $mob_msg = '';
    $email_msg = '';
    /**************************************************************************************************************************************/        
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['date']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['email']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mob = $_POST['mobile'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $email = $_POST['email'];
    /**************************************************************************************************************************************/        
        $fname_pattern = '/^[a-z]{3,15}$/i';
        $lname_pattern = '/^[a-z]{3,15}$/i';
        $address_pattern = '/^[a-z0-9]{10,50}$/i';
        $mob_pattern = '/^[0-9]{10,12}$/';
        $date_pattern = '/^[0-3][0-9]-[0-1][0-9]-[0-9]{4}+$/';
        $email_pattern = '/^[a-z0-9_.]+@(gmail|yahoo).(com|co.in|org)$/';
    /**************************************************************************************************************************************/        
        if (empty($fname))
            $fn_msg = '<i style="color: red">Please fill out the field!</i>';
        elseif (!preg_match($fname_pattern, $fname))
            $fn_msg = '<i style="color: red">Invalid Syntax!</i>';
        else
            $fn_msg = '<i style="color: green">Perfect!</a>';
    /**************************************************************************************************************************************/        
        if (empty($lname))
            $ln_msg = '<i style="color: red">Please fill out the field!</i>';
        elseif (!preg_match($lname_pattern, $lname))
            $ln_msg = '<i style="color: red">Invalid Syntax!</i>';
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
    /**************************************************************************************************************************************/        
        if (empty($address))
            $address_msg = '<i style="color: red">Fill the field!</i>';
        elseif (!preg_match($email_pattern, $email))
            $address_msg = '<i style="color: red">Wrong Syntax!</i>';
        else
            $address_msg = '<i style="color: green">Perfect!</a>';
}
?>
<div>
    <div id=middle>
    <form method="POST">
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
        <textarea class='inputs' name="address" cols="20" rows="5" Placeholder="Fill Your Address here..."></textarea><?php echo $address_msg; ?>
        <br>
        <input class="actions inputs" type="submit" name="ok">
        <input class="actions inputs" type="reset">
    </form>    
    </div>
</div>
<style>
    #middle
    {
        margin: 0px 25px;
        width: 180px;
        border: none;
    }
    div
    {
        border: 2px solid black;
        padding: 10px;
        width: 255px;
        justify-content: center;
    }
    .inputs
    {
        border-left: none;
        border-right: none;
        border-top: none;
        text-align: left;
        margin-top: 12px;
        margin-bottom: 6px;
    }
    h3
    {
        font-size: 1.3em;
    }
    .actions
    {
        margin-left: 15px;
        margin-right: 15px;
        background: white;
    }
    textarea{
        font-family: "Times-new-Roman";
    }
</style>