<?php
	$var4 = $_GET['klasseKode'];
	$lines = file('D:\\Sites\\home.hbv.no\\phptemp\\885664-student.txt');
	$lines = preg_grep("/" . $var4 . "/", $lines);

	foreach($lines as $var1);
	{
		echo "$name<br>";
	}
?>
