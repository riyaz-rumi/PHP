<?php
	# SPECIAL LOOP FOR AN ARRAY ITERATION
	/*
	$myArr = array(38, 99.99, 'string', true);
	foreach($myArr as $k=>$v)
		echo "<pre>".$k."=>".$v.", ";
	*/

	# FUNCTION: 1 ===> func_num_args(); ----> return-type (int)
	function f1($a, $b) {
		echo 'f1(5, 3);'.'<br />';
		$total_args = func_num_args();
		echo 'func_num_args(); = '.$total_args.'<br /><br />';
	}
	f1(5, 3);

	# FUNCTION: 2 ===> func_get_arg(); ----> return-type (int)
	function f2($a, $b, $c, $d) {
		echo 'f2(11, 99.99, "Hello", true);'.'<br /><br />';
		for($i=0; $i<4; $i++)
		{
			$arg = func_get_arg($i);
			echo "func_get_arg($i); = ".$arg.'<br />';
		}
	}
	f2(11, 99.99, "Hello", true);
?>