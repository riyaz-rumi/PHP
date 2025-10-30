<?php
    $fname = 'temp.txt';
	$string = 'This is fwrite(), The file-handling function!';
    $handle = fopen($fname, 'w');
    fwrite($handle, $string);   
	//echo fread($handle, filesize($fname));
    fclose($handle);
?>