<html>
<head>
    <title>Webscript 6</title>
    <link href="css/webscript_6.css" rel="stylesheet" />
</head>
<body>
<div>
<?php
$n1 = $_POST['fn'];
$n2 = $_POST['sn'];  
if(!isset($_POST['math_functions']))  
    echo "<br /><h3 class='phpwarning'>Warning</h3>You haven't selected any function!<br /><br /><a href='webscript_6.html'>Try Again</a><br/><br/>";
else 
{
    $functions = $_POST['math_functions'];
    echo '<div class="left">';
    echo '<br /><h2 class="h2php">Numbers</h2><h4>'.$n1.' & '.$n2.'</h4><hr />';
    foreach($functions as $value)
    {
        echo "<h3>".$value." ( )</h3>";
        if($value == 'min')
            echo '<h4>'.$value($n1, $n2).'</h4><hr />';
        elseif($value == 'max')
            echo '<h4>'.$value($n1, $n2).'</h4><hr />';
        elseif($value == 'rand')
            echo '<h4>'.$value($n1, $n2).'</h4><hr />';
        elseif($value == 'pow')
            echo '<h4>'.$value($n1, $n2).'</h4><hr />';
        elseif($value == 'fmod')
            echo '<h4>'.$value($n1, $n2).'</h4><hr />';
        else {
            echo '<h4>'.$value($n1).'</h4>';
            echo '<h4>'.$value($n2).'</h4><hr />';
        }
    }
    echo '<a class="phpanchor"href="webscript_6.html">Go Back</a><br /><br />';
}
?>
</div>
</body>
</html>

<!-- $n1 = $_POST['fn'];
$n2 = $_POST['sn'];  
if(isset($_POST['built_in_function']) == NULL)  
    echo "<br /><h3>Warning</h3>You didn't select any function!<br /><a href='webscript_7.html'>Try Again</a><br/><br/>";
else {
$mf = $_POST['built_in_function'];
echo '<h2>Result</h2><hr />';
//sqrt
if($mf == 'sqrt')
    echo 'The "Square Root" of '.$n1.': '.sqrt($n1).'<br />The "Square Root" of '.$n2.': '.sqrt($n2);
//pow
if($mf == 'pow') {
    echo $n1.'<sup>'.$n2.'</sup> = '.pow($n1, $n2).'<br /><br />';
    echo $n1.' to the Power '.$n2.' = '.pow($n1, $n2);
}
//min
if($mf == 'min') {
        echo 'First Number = '.$n1.'<br />Second Number = '.$n2.'<br />';
        if($n1 == $n2)
            print 'Both are Equal!';
        else
            echo 'Minimum  Number : '.min($n1, $n2);
}
//max
if($mf == 'max') {
    echo 'First Number = '.$n1.'<br />Second Number = '.$n2.'<br />';
    if($n1 == $n2)
        print 'Both are Equal!';
    else
        echo 'Maximum  Number : '.max($n1, $n2);
}
//rand
if($mf == 'rand')
    echo 'The rand ( ) function generates ramdom number between '.$n1.' and '.$n2.'<br/><br/>','Ramdom Number: '.rand($n1, $n2);
//decbin
if($mf == 'decbin')
    echo 'The Binary Number of the First Number '.$n1.' : '.decbin($n1).'<br /><br />', 'The Binary Number of the Second Number '.$n2.' : '.decbin($n2);
//bindec
if($mf == 'bindec')
    echo 'The Decimal Number of the First Binary Number '.$n1.' : '.bindec($n1).'<br /><br />', 'The Decimal Number of the Second Binary Number : '.$n2.' : '.bindec($n2);
//decoct
if($mf == 'decoct')
    echo 'The octal Number of the First Number '.$n1.' : '.decoct($n1).'<br /><br />', 'The octal Number of the Second Number '.$n2.' : '.decoct($n2);
//decoct
if($mf == 'octdec')
    echo 'The Decimal Number of the First octal Number '.$n1.' : '.octdec($n1).'<br /><br />', 'The Decimal Number of the Second octal Number '.$n2.' : '.octdec($n2);
//round
if($mf == 'round')
    echo 'The First Number '.$n1.' after  round ( ) : '.round($n1).'<br /><br />', 'The Second Number '.$n2.' after  round ( ) : '.round($n2);
//ceil
if($mf == 'ceil')
    echo 'The First Number '.$n1.' after  ceil ( ) : '.ceil($n1).'<br /><br />', 'The Second Number '.$n2.' after  ceil ( ) : '.ceil($n2);
//floor
if($mf == 'floor')
    echo 'The First Number '.$n1.' after  floor ( ) : '.floor($n1).'<br /><br />', 'The Second Number '.$n2.' after  floor ( ) : '.floor($n2);   -->