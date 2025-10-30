<title>Webscript 7 New</title>
<link href="css/webscript_7_checkbox.css" rel="stylesheet" />
<div>
<?php
if(!isset($_POST['string_functions']))  
    echo "<h3 class='phpwarning'>Warning</h3>You haven't selected any function!<br /><a href='webscript_7_checkbox.html'>Try Again</a><br />";
else 
{
    $string = $_POST['string'];
    $function = $_POST['string_functions'];
    echo '<div class="left">';
    echo '<br /><h2 class="h2php">Main String</h2><h5>'.$string.'</h5><hr />';
    foreach($function as $value)
    {
        echo "<h3>".$value." ( )</h3>";
        echo '<h5>'.$value($string).'</h5><hr />';
    }
    echo '<a class="phpanchor" href="webscript_7_checkbox.html">Go Back</a><br /><br />';
}
?>
</div>