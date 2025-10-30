<?php
    include "Connection.php";
    $result = $obj->select();
    if ($result)
    {
        echo "<h2>TEMP DATA</h2>";
        echo "<table border width='40%'>
            <tr>
                <th align='center'>ID</th>
                <th align='center'>Name</th>
                <th align='right'>Age</th>
                <th align='center'>Update</th>
                <th align='center'>Delete</th>
            </tr>";
        while ($r = mysqli_fetch_object($result))
        {
            echo "<tr>
                    <td align='center'>".$r->ID."</td>
                    <td align='left'>".$r->NAME."</td>
                    <td align='right'>".$r->AGE."</td>
                    <td align=center><a href='update.php?id=".$r->ID."&name=".$r->NAME."&age=".$r->AGE."'>Update</td>
                    <td align=center><a href='delete.php?id=".$r->ID."'>Delete</td>
                </tr>";
        }
        echo "</table>";
    }
    echo "<br><a href=insert.html>Insert New Record</a><br><br>";
?>
<form method="POST" action="">
    <input type="text" maxlength="15" placeholder="Search The Specific Records Here..." name="search_name">
    <button value="Submit" name="search">Search</button>
</form>
<?php
    if (isset($_POST['search_name']) and $_POST['search_name'] != null)
    {
        $name = $_POST['search_name'];
        $search = $obj->search($name);
        if (mysqli_num_rows($search))
        {
            echo "<table border width='40%'>
                <tr>
                    <th align='center'>ID</th>
                    <th align='center'>Name</th>
                    <th align='right'>Age</th>
                    <th align='center'>Update</th>
                    <th align='center'>Delete</th>
                </tr>";
                while ($r = mysqli_fetch_object($search))
                {
                    echo "<tr>
                            <td align='center'>".$r->ID."</td>
                            <td align='left'>".$r->NAME."</td>
                            <td align='right'>".$r->AGE."</td>
                            <td align=center><a href='update.php?id=".$r->ID."&name=".$r->NAME."&age=".$r->AGE."'>Update</td>
                            <td align=center><a href='delete.php?id=".$r->ID."'>Delete</td>
                        </tr>";
                }
                echo "</table>";   
        }
        else 
            echo "No such Record Found!";
    }
?>
<style>
    input
    {
        border-left: none;
        border-right: none;
        border-top: none;
        width: 20%;
    }
    button
    {
        border-left: none;
        border-right: none;
        border-top: none;
    }
</style>
