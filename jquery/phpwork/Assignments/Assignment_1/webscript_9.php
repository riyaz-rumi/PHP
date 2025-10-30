<html>
<head>
    <title>Webscript 9</title>
    <link href="css/webscript_9.css" rel="stylesheet" />
</head>
<body>
<div id='phpdiv'>
<?php
    if(isset($_POST['date_function']) == null)  
        echo "<h3>Warning</h3>You haven't selected any function!<br /><a href='webscript_9.html'>Try Again</a>";
    else
    {
        $df = $_POST['date_function'];
        function df1()  // date()
        {
            $str_format = array('j', 'S', 'M', 'F', 'y', 'Y', 'N', 'W', 'L', 'H', 'i', 's', 'a', 'A');
            echo '<h3> date ( )</h3>';
            echo '<table><tr>';
            foreach($str_format as $alphabet)
            {
                echo '<td>'.$alphabet.'</td>';
            }
            echo '</tr><tr>';
            foreach($str_format as $alphabet)
            {
                echo '<td>'.date($alphabet).'</td>';
            }
            echo '</tr></table>';
            echo "<h4>date ( ' j S  F  Y  H : i : s   A ' ) : ".date('jS F Y H:i:s A').'</h4><hr />';
        }
        function df2()  // time()
        {
            echo '<h3> time ( )</h3>';
            echo 'Decription : Shows the seconds from January 1, 1970 to till now!';
            echo '<h4>Seconds : '.time().'</h4><hr />';
        }
        function df3()  // gettime()
        {
            echo '<h3> getdate ( )</h3>';
            print '<pre>';
            print_r(getdate(date("U"))).'</h4><hr />';
            print '</pre>';
        }
        function df4()  // mktime()
        {
            echo '<h3> mkdate ( )</h3>';
            print mktime().'</h4><hr />';
        }
        switch($df)
        {
            case 'date':
                df1();
                break;
            case 'time':
                df2();
                break;
            case 'getdate':
                df3();
                break;
            case 'mktime':
                df4();
                break;
        }
        echo '<a href="webscript_9.html">Go Back</a>';

        
    }
?>
</div>
</body>
<!-- 
    for radio button of date()
    else 
    {
        $df = $_POST['date_function'];
        $str_format = array('j', 'S', 'M', 'F', 'y', 'Y', 'N', 'W', 'L', 'H', 'i', 's', 'a', 'A');
        echo '<h3>'.$df.' ( )</h3>';
        echo '<table><tr>';
        foreach($str_format as $alphabet)
        {
            echo '<td>'.$alphabet.'</td>';
        }
        echo '</tr><tr>';
        foreach($str_format as $alphabet)
        {
            echo '<td>'.$df($alphabet).'</td>';
        }
        echo '</tr></table>';
        echo "<h4>date ( ' j S  F  Y  H : i : s   A ' ) : ".$df('jS F Y H:i:s A').'</h4><hr />';
        echo '<a href="webscript_9.html">Go Back</a>';
    } -->
</html>