<title>Upload</title>
<script src='jquery.js'></script>
<form method="post" enctype="multipart/form-data" action="upload.php">
    <input id="file" type="file" name="myfile" value="file" required/><br><br>
    <label>Path : <input id="path" type="text" name="path" style="width: 400px" required/></label><br><br>
    <input id="upload" type="submit" name="upload" value="Upload"/>
</form>
<?php
    if (isset($_POST['upload']))
    {
        $fnm = $_FILES['myfile']['name'];
        $fsize = $_FILES['myfile']['size'];
        $ftype = $_FILES['myfile']['type'];
        $temp = $_FILES['myfile']['tmp_name'];
        $path = $_POST['path'];
        $place = $path.'/'.$fnm;

        echo "<br />Name : ".$fnm;
        echo "<br />Type : ".$ftype;
        echo "<br />Size : ".ceil($fsize / 1024)." KB<br />";

        move_uploaded_file($temp, $place);
		
        echo '<br />File is uploaded at '.$place;
    }
?>