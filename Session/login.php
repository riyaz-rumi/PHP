<div>
    <div id='main'>
        <br/>
        <h3 class="MyH3">Log-in</h3>
        <form method=POST >
            <input name='username' type='text' placeholder='Username' class="input1" />
            <input name='password' type='password' placeholder='Password' class="input1" />
            <input name='login' id="login" value='Log-in' type='submit' />
        </form>
    </div>
</div>

<?php
if(isset($_POST['username']) and isset($_POST['password']) and $_POST['username'] != '' and $_POST['password'] != '')
{
    $unm = $_POST['username'];
    $pwd = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_login');
    $select = "SELECT * FROM `tbl_login`";
    $result = mysqli_query($conn, $select);
    while ($r = mysqli_fetch_array($result))
    {
        if ($unm == $r[1] and $pwd == $r[2])
        {
            session_start();
            $_SESSION['username'] = $unm;
            header('location: welcome.php');
        }
    }

}
?>
<style>
    .MyH3{
        font-family: Comic Sans MS;
        font-weight: bolder;
        color: #034203;
        margin-top: 20px;
    }
    .input1:focus{
        border-bottom-color: purple;
        border-left: none;
        border-right: none;
        border-top: none;
        margin-left: none;
        width: 170px;
    }
    #login
    {
        border-bottom: none;
        margin: auto;
        padding: 8px;
        width: 65px;
        border-radius: 5px;
        background: purple;
        color: white;
        font-family: Comic Sans MS;
        font-weight: bold;
        font-size: 15px;
        text-align: center;
        margin-left: 100px;
        outline: none;
        border: none;

    }

    h3
    {
        text-align: center;
    }
    .input1 
    {
        display: block;
        margin: 20px 50px;
        border-left: none;
        border-right: none;
        border-top: none;
        outline: none;
        width: 150px;
        margin-left: 55px;
        transition-duration: 0.5s;
    }
    /*div
    {
        width: 250px;
        border: 2px solid black; 
        margin: auto;
        border-left: none;
        border-right: none;
        border-bottom-right-radius: 4rem;
        border-bottom-left-radius: 4rem;
        border-top-right-radius: 4rem;
        border-top-left-radius: 4rem;
    }*/
    div
    {
        width: 250px;
        margin: auto;
        height: 250px;
    }
    /*#main
    {
        width: 280px;
        border: 2px solid black; 
        margin: 10px -16px;
        border-top: none;
        border-bottom: none;
        border-bottom-right-radius: 4rem;
        border-bottom-left-radius: 4rem;
        border-top-right-radius: 4rem;
        border-top-left-radius: 4rem;
    }*/
    #main
    {
        width: 275px;
        height: 250px;
        border: none; 

/*        margin: 100px -16px;*/
        margin: auto;
        border-radius: 5px;
        box-shadow: 4rem 3rem 5rem grey;

    }
</style>