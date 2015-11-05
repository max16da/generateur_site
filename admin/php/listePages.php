<?php

$a=scandir("../../pages");
$page="";
foreach($a as $file) {
	if (trim($file)!="." && trim($file)!=".."){
		$pos_point = strpos($file, '.');
		$extension = substr($file, 0, $pos_point); 
		//$page.="<li><a href='".str_replace('php/listePages.php','index.php?page=',$_SERVER['REQUEST_URI']).$extension."'>".$file."</a><img src='https://upload.wikimedia.org/wikipedia/commons/0/0b/Cancel.png' class='gif' id='$file'/></li>";		

		$page.="<li><a href='http://".$_SERVER['SERVER_NAME'].str_replace('php/listePages.php','index.php?page=',$_SERVER['REQUEST_URI']).$extension."'>".$file."</a><img src='https://upload.wikimedia.org/wikipedia/commons/0/0b/Cancel.png' class='gif' id='$file'/></li>";		
	}
}
print_r($page);


?>
