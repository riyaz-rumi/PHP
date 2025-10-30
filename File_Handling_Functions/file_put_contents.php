<?php
	// file_put_contents() : Function is used to read the file without opening & closing it.
	// Syntax : file_put_contents(filename, mixed data); other parameter are also available but optional...
	// return type : Boolean
	
    $fname = 'temp.txt';
	$string = 'This is file_put_contents(), The file-handling function!';
	file_put_contents($fname, $string);
?>