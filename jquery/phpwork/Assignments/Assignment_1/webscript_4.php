<html>
<head>
    <title>Webscript 4</title>
    <link href="css/webscript_4.css" rel="stylesheet" />
</head>
<body>
    <div>
<?php
    if(isset($_POST['name']) == NULL or isset($_POST['limit']) == NULL )
        echo '<br />Something was required!<br /><br />','<a href="webscript_4.html">Go Back</a><br /><br />';
    else
    {
        $n = $_POST['name'];
        $lmt = $_POST['limit'];
        echo '<ol type=i>';
        for($i = 1; $i <= $lmt; $i++)
        echo '<li>'.$n.'</li>';
        echo '</ol>';
        echo '<a href="webscript_4.html">Go Back</a><br /><br />';
    }
?>
    </div>
</body>
</html>