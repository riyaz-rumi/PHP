<?php
// The fputs() function is used to read a single line from a file.

    $fname = 'temp.txt';
	$string = 'This is fputs(), write in your file';
	
    $handle = fopen($fname, 'w');
	fputs($handle, $string);   
    fclose($handle);
?>