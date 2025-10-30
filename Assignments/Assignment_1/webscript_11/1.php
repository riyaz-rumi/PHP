<?php
// The fgets() function is used to read a single line from a file.
    $fname = 'temp.txt';
    $handle = fopen($fname, 'r');
	echo fgets($handle,filesize($fname)); 
    fclose($handle);
?>