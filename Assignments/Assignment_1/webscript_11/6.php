<?php
	// file_get_contents() : Function is used to read the file without opening & closing it.
	// Syntax : file_get_contents(filename); 
	// other parameter are also available but optional...
	// return type : Boolean
    
	$fname = 'temp.txt';
	echo file_get_contents($fname);
?>