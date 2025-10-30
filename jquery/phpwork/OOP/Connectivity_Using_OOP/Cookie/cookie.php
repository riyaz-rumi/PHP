<?php
    $cname = 'Riyaz';
    $cvalue = 18;
    $time = (time() + 5);
    setcookie($cname, $cvalue, $time);
    if (!isset($_COOKIE[$cname]))
        echo "Cookie ".$cname." is not set!";
    else
        echo "Cookie Value : ".$_COOKIE[$cname];
?>