<?php

$a=scandir("images");
$page="";
foreach($a as $file) {
	if (trim($file)!="." && trim($file)!=".."){
		$page.="<li>http://".$_SERVER['SERVER_NAME']."/max/generateurHTMLcopie/admin/php/images/".$file."</li>";
	}
	
}

print_r($page);

?>
