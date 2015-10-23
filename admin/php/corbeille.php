<?php

//~ $a=scandir("../../pages");
//~ $page="";
//~ foreach($a as $file) {
	//~ $fileHand=fopen('localhost/max/generateurHTMLcopie/pages/'.$file,'r');
	//~ fclose($fileHand);

echo $_POST['filename'];


rename("/home/max/www/generateurHTMLcopie/pages/".$_POST['filename'], "/home/max/www/generateurHTMLcopie/admin/corbeille/".$_POST['filename']);
	
	
?>
