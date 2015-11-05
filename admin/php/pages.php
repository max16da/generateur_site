<?php 

$a=scandir("../../pages");
$page="";
foreach($a as $file) {
	if (trim($file)!="." && trim($file)!=".."){
		$pos_point = strpos($file, '.');
		$extension = substr($file, 0, $pos_point); 
		$page.='<li id="'.$extension.'">'.$extension.'<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Cancel.png" class="me" id="'.$extension.'" alt=".$extension."/></li>';		
	}
}
print_r($page);



?>
