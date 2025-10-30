<title>Record</title>
<link href="webscript_3.css" rel="stylesheet" />
<div>
<?php
    require('conn.php');
    $record = 'select * from `tbl_bookinfo`';
    $result = mysqli_query($conn, $record);
    echo '<h3>Book Database</h3>';
    echo '<table><tbody>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Publication</th>
            <th id="price">Price (Rs.)</th>
            <th>Delete</th>
        </tr>';
    while ($r = mysqli_fetch_row($result)) 
    {
        echo '<tr>
                <td>'.$r[0].'</td>
                <td id=name>'.$r[1].'</td>
                <td>'.$r[2].'</td>
                <td id=price>'.$r[3].'</td>
                <td><a href=delete.php?id='.$r[0].'>Delete</a></td>
            </tr>';
    }
    echo '</tbody></table>';
    echo '<a href="webscript_3.html">Add New Record</a>';
?>
</div>
