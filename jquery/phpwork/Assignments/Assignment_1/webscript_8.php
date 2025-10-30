<html>
<head>
    <title>Webscript 8</title>
    <link href="css/webscript_8.css" rel="stylesheet" />
</head>
<body>

<?php
    if(isset($_POST['fruits_array']) == NULL)  
        echo "<div><h3>Warning</h3>You haven't chosen any fruits!<br /><a href='webscript_8.html'>Go & Choose</a></div>";
    elseif(isset($_POST['array_function']) == NULL)  
        echo "<div><h3>Warning</h3>You haven't selected any function!<br /><a href='webscript_8.html'>Try Again</a></div>";
    else 
    {
        $fruits = $_POST['fruits_array'];
        $fun_name = $_POST['array_function'];
        // $temp = array('Tomato','Onion','Garlic','Leddis-finger');
        // print_r(array_reverse($temp));
        echo '<div class="left">';
        //*****************************************************
        $str_fruits = implode(' , ',$fruits);
        print '<h3>Fruits = [ '.$str_fruits.' ]</h3><hr />';
        //*****************************************************
        echo '<h3>'.$fun_name.' ( )</h3>';
        $fun_name($fruits);
        if($fun_name == 'array_reverse')
        {   
            echo '<pre><h4>';
            print_r($fun_name($fruits));
            echo '</h4></pre>';
        }
        elseif($fun_name == 'count')
        {
            print '<h4>Total Fruits : '.$fun_name($fruits).'</h4>';
        }
        else
        {
            $str_fruits = implode(' , ', $fruits);
            echo '<h4>'.$str_fruits.'</h4>';
            echo '<pre><h4>';
            print_r($fruits);
            echo '</h4></pre>';
        }
        echo '<hr /><a href="webscript_8.html">Go Back</a></div>';
    }
        // else {
        //     $operation($fruits);
        //     echo 'Fruits Array = ';
        //     foreach($fruits as $name)
        //         echo " ".$name;
        //     echo '<pre>';
        //     print_r($fruits);
        //     echo '</pre>';
        // }
?>
</body>
</html>