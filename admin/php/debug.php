<?php

function debug($data) {
	$file=fopen('debug.txt',"w");
	fwrite($file,$data);
	fclose($file);
}

?>
