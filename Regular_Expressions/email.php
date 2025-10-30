
<?php
    // $message = '';
    // if (isset($_POST['ok']))
    // {
    //     $email = $_POST['email'];
    //     $email_pattern = '/^[a-z0-9_.]+@(gmail|yahoo).(com|co.in|org)$/i';
    //     if (empty($email))
    //     {
    //         $message = '<i style="color: red">Unexpected Syntax!</i>';
    //     }
    //     // elseif (strlen($email) < 8)
    //     // {
    //     //     $message = '<i style="color: red">There must be more than 8 characters!</i>';
    //     // }
    //     elseif (!preg_match($email_pattern, $email))
    //     {
    //         $message = '<i style="color: red">Please enter alphabets only!</i>';
    //     }
    //     else
    //     {
    //         $message = '<i style="color: green">Perfect!</a>';
    //     }
    // }<?php echo $message; 
?>
<form method="POST">
    <input type="file" name="email"Placeholder="Write Your E-mail">
    <br><br>
    <input type="submit" name="ok">
</form>