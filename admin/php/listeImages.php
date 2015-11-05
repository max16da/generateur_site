<?php

$a=scandir("images");
$page="";
foreach($a as $file) {
	if (trim($file)!="." && trim($file)!=".."){
		$page.="<li>http://".$_SERVER['SERVER_NAME'].str_replace('listeImages.php','images/',$_SERVER["REQUEST_URI"]).$file."</li>";
	}
	
}

print_r($page);

?>
