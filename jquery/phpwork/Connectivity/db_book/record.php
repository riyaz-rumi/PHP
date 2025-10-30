<!-- <html>
    
<head>
    <title>Book Record</title>
</head>

<body>
    <div>
        <form action="delete.php" method="post">
            <h3>Delete Record</h3>
            Book Name : <input type="text" maxlength="30" name="book_name" required />
            <br />
            <input type="submit" id="go" value="Go" />
            <input type="reset" id="reset" value="Reset" />
        </form>
    </div>
    <br /> -->
    <div>
        <link href="delete.css" rel="stylesheet" />
    <?php
        require('conn.php');
        $select_data = 'select * from `tbl_bookinfo`';
        $data = mysqli_query($conn, $select_data);

        echo '<table border>
            <h3>Book Database</h3>
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Book Publication</th>
                <th>Book Price ($)</th>
            </tr>';

        while ($r = mysqli_fetch_row($data)) 
        {
            echo '<tr>
                    <td>'.$r[0].'</td>
                    <td>'.$r[1].'</td>
                    <td>'.$r[2].'</td>
                    <td>'.$r[3].'</td>
                </tr>';
        }
        echo '</table>';
        echo "Total remaining record : ".mysqli_affected_rows($conn);

        echo '<hr /><a href="insert.html">Add New Record</a>';
        echo '<a href="delete.html">Delete Record</a>';
        echo '<a href="update.html">Update Publication</a>';
    ?>
</div>