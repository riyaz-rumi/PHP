<form>
    <input type='number' name='num' placeholder='Input a number' required>
</form>
<?php
    if (isset($_GET['num']))
    {
        $num = $_GET['num'];
        $i = 1;
        echo '<h2>Multiplication Table</h2>';
        echo '<table border>
            <tr>
                <th style="width:100px;">Multiplicand</th>
                <th style="width:50px; text-align:center;">Multiplier</th>
                <th style="width:100px;">Result</th>
            </tr>';
        for ($i = 1; $i <= 10; $i++)
        {
            echo '<tr>
                <td style="text-align:center;">'.$num.'</td>
                <td style="text-align:center;">'.$i.'</td>
                <td style="text-align:center;">'.($num*$i).'</td>
            </tr>';
       

        }
    }
?>