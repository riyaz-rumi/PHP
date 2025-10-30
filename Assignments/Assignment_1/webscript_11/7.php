<?php
	echo "file() : Function is used to read the file without opening & closing it.";
	// Syntax : file(filename);
	// return type : Boolean
	// The file() reads a file into an array.
	// Each array element contains a line from the file, with the newline character still attached.
    $fname = 'temp.txt';
	print_r(file($fname));
?>