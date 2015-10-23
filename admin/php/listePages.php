<?php

$a=scandir("../../pages");
$page="";
foreach($a as $file) {
	if (trim($file)!="." && trim($file)!=".."){
		$pos_point = strpos($file, '.');
		$extension = substr($file, 0, $pos_point); 
		$page.="<li><a href='http://".$_SERVER['SERVER_NAME']."/max/generateurHTMLcopie/admin/index.php?page=".$extension."'>".$file."</a><img src='http://wikiaide.itool.net/_media/itool_appli/icon_del.gif' class='gif' id='$file'/></li>";		
	}
}
print_r($page);


?>
