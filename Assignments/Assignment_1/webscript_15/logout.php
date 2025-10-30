<?php
session_start();
if (isset($_SESSION['username']))
{
    session_destroy();
    echo "You're logged Out!<br />";
}
else
{
    echo "You're already logged Out!<br />";
}
echo "<a href='login.php'>Login Again</a>";
?>