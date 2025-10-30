<?php
session_start();
if (isset($_SESSION['username']))
{
    echo "Hi, ".$_SESSION['username'].", what's up?";
    echo "<br /><a href='logout.php'>Log Out</a>";
}
else
{
    echo "First <a href='login.php'>Login</a>";
}
?>