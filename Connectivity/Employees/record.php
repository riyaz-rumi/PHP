<title>Employees Record</title>
<!-- <link href="update.css" rel="stylesheet" /> -->
<?php
    require('conn.php');
    $data = 'select * from `tbl_employees`';
    $result = mysqli_query($conn, $data);
    echo '<table border>
        <h3>Employees Data</h3>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary ($)</th>
        </tr>';
    while ($r = mysqli_fetch_row($result)) 
    {
        echo '<tr>
                <td>'.$r[0].'</td>
                <td>'.$r[1].'</td>
                <td>'.$r[2].'</td>
                <td>'.$r[3].'</td>
            </tr>';
    }
    echo '</table>';
    echo '<hr /><a href="employees.html">Add Another Record</a>';
?>