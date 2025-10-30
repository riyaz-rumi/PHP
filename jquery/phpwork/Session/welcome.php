<?php 
        session_start();
        if(isset($_SESSION['username']))
        {
            echo "<h2>Good Morning, ".$_SESSION['username']."</h2>";
            // echo "<h4><a href=logout.php>Logout</a></h4>";
            echo "<form action=logout_with_db.php>
                    <input type=submit value=LogOut name=logout />
                </form>";
        }
        else
        {
            echo "First, Login In!<br><br>";
            echo "<a href=login_with_db.php>Login</a>";
            
        }
?>