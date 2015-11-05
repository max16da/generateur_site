<?php
		$nav=$_POST['liste'];
		$fp=fopen('../../pages/'.$_POST['nom'].'.html','r+'); 
		$a=file_get_contents('../../pages/'.$_POST['nom'].'.html');
		$re = '!<ul id="menuSite">([\\s\\S]*?)</ul>!'; 
		$replace=preg_replace($re,'<ul id="menuSite">'.$nav.'</ul>',$a);
		fwrite($fp,$replace);
		fclose($fp);

?>
