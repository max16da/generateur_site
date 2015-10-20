<?php
	//~ $main=$_POST['content'];
	//~ $findex=fopen('../../pages/'.$_POST["nom"].'.html','w');
	//~ $a=file_get_contents($contents);
	//~ $re = "/<main>([\\s\\S]*?)<\\/main>/"; 
	//~ $replace=preg_replace($re,'<main>'.$main.'</main>',$a);
	//~ fclose($findex);

	$main=$_POST['conten'];
	$fp=fopen('../pageMain/data.html','w');
	fwrite($fp,$main);
	fclose($fp);
	
	$file='../pageMain/data.html';
	$fim=fopen($file,'r');
	$contents=fread($fim,filesize($filename));
	//~ $re = "/<main>([\\s\\S]*?)<\\/main>/"; 
	$fir=file_get_contents('../pageMain/data.html');
	$filename='../pageMain/re.html';
	$fi=fopen($filename,'w');
	$replace=preg_replace("Tiarticle",$fir,$fi);
	fwrite($fi,$replace);
	fclose($fi);

	//~ $data=$_POST['conten'];
	//~ $filename='../../pages/'.$_POST["nom"].'.html';
	//~ $fmain=fopen($filename,'w');
	//~ $contents=fread($fmain,filesize($filename));
	//~ $filedata=file_get_contents('../pageMain/data.html');
	//~ fwrite($fmain,$filedata);
	//~ fclose($fmain);
	//~ 
	//~ $tempMain=file_get_contents('../../template/'.$_POST['option'].'.html');
	//~ $filename='../pageMain/data.html';
	//~ $fmain=fopen($filename,'w');
	//~ $contents=fread($fmain,filesize($filename));
	//~ $re = "/<main>([\\s\\S]*?)<\\/main>/"; 
	//~ $replace=preg_replace($re,'<main>azerty</main>',$tempMain);
	//~ fwrite($fp,$replace);
	//~ fclose($fp);
?>
