<?php
$c_name = array('First_Name', 'Last_Name', 'Mobile_No');
$c_value = array('Riyaz', 'Rumi', '1234567890');
$c_time = (time() + 1);
setcookie($c_name[0], $c_value[0], $c_time);
setcookie($c_name[1], $c_value[1], $c_time);
setcookie($c_name[2], $c_value[2], $c_time);
if (isset($_COOKIE[$c_name[0]]) && isset($_COOKIE[$c_name[1]]) && isset($_COOKIE[$c_name[2]]))
{
    echo "<h4>Cookie</h4>";
    echo $c_name[0]." : ".$_COOKIE[$c_name[0]]."<br>";
    echo $c_name[1]." : ".$_COOKIE[$c_name[1]]."<br>";
    echo $c_name[2]." : ".$_COOKIE[$c_name[2]]."<br>";
}
else
    echo "Your Cookie is not set!";

?>