<?php
// The fread() function reads from an open file. 
// The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
    $fname = 'temp.txt';
    $handle = fopen($fname, 'r');
    echo fread($handle,filesize($fname));   
    fclose($handle);
?>