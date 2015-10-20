<?php
	//~ $main=$_POST['content'];
	//~ $findex=fopen('../../pages/'.$_POST["nom"].'.html','w');
	//~ $a=file_get_contents($contents);
	//~ $re = "/<main>([\\s\\S]*?)<\\/main>/"; 
	//~ $replace=preg_replace($re,'<main>'.$main.'</main>',$a);
	//~ fclose($findex);

	//~ $header=file_get_contents('../../template/header.html');
	//~ $nav=file_get_contents('../../template/nav.html');
	//~ $footer=file_get_contents('../../template/footer.html');
	//~ $fp=fopen('../../pages/'.$_POST["nom"].'.html','w');
	//~ fwrite($fp,$header.$nav.$_POST['content'].$footer);
	//~ fclose($fp);

	//~ $header=file_get_contents('../../template/header.html');
	//~ $nav=file_get_contents('../../template/nav.html');
	//~ $footer=file_get_contents('../../template/footer.html');
	//~ $main=$_POST['content'];
	//~ $fp=fopen('../../pages/'.$_POST["nom"].'.html','w');
	//~ fwrite($fp,$header.$nav.$main.$footer);
	//~ fclose($fp);

	$main=$_POST['content'];
	$fp=fopen('../../pages/'.$_POST["nom"].'.html','w');
	fwrite($fp,$main);
	fclose($fp);
?>
