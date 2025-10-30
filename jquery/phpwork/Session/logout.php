<?php
if(isset($_GET['logout']))
{
    session_start();
    if (isset($_SESSION['username']))
    {
        session_destroy();
        echo "<h2>You're logged out!</h2>";
    }
}
?>
<form>
    <input type=submit name=login value="Login Again"></input>
</form>
<?php
    if (isset($_GET['login']))
        header("location: login_with_db.php");
?>