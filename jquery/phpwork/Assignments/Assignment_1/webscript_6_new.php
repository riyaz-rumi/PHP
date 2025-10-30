<link href="css/webscript_6_new.css" rel="stylesheet" />
<div>
<?php
    $n1 = $_POST['fn'];
    $n2 = $_POST['sn'];    
    if(isset($_POST['built_in_function']) == NULL)
    {
        echo '<br />You have to select at least one only!<br />';
       echo '<hr /><a href="webscript_6_new.html">Go Back</a><br /><br />';
        exit;
    }
    $mf = $_POST['built_in_function'];
    echo '<h2>Result</h2><hr />';

    //sqrt
    if($mf == 'sqrt')
        echo 'The "Square Root" of '.$n1.' is '.sqrt($n1).'<br />The "Square Root" of '.$n2.' is '.sqrt($n2);

    //pow
    if($mf == 'pow') {
        echo $n1.'<sup>'.$n2.'</sup> = '.pow($n1, $n2).'<br /><br />';
        echo $n1.' to the Power '.$n2.' = '.pow($n1, $n2);
    }

    //min
    if($mf == 'min') {
        if($n1 < $n2)
            echo 'The First Number "'.$n1.'" was the "Minimum Number" !';
        elseif($n2 < $n1)
            echo 'The Second Number "'.$n2.'" was the "Minimum Number" !';
        else 
            echo 'First Number = Second Number !';
    }

    //max
    if($mf == 'max') {
        if($n1 > $n2)
            echo 'The First Number "'.$n1.'" was the "Maximum Number" !';
        elseif($n2 > $n1)
            echo 'The Second Number "'.$n2.'" was the "Maximum Number" !';
        else 
            echo 'First Number = Second Number !';
    }

    //rand
    if($mf == 'rand')
        echo 'The rand ( ) function generates ramdom number between '.$n1.' and '.$n2.'<br/><br/>','Ramdom Number: '.rand($n1, $n2);

    //decbin
    if($mf == 'decbin')
        echo 'The Binary Number of the First Number '.$n1.' : '.decbin($n1).'<br /><br />', 'The Binary Number of the Second Number '.$n2.' : '.decbin($n2);
   echo '<hr /><a href="webscript_6_new.html">Go Back</a><br /><br />';
?>
</div>
