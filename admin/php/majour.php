<?php

//~ if (isset($_GET['page'])) {
	if($_POST['nom']=="index"){	
		$main=$_POST['content'];
		$fim=fopen('../../index.html','r+'); 
		$a=file_get_contents('../../index.html');
		$re = '!<article id="main">([\\s\\S]*?)</article>!Ui'; 
		$replace=preg_replace($re,'<article id="main">'.$main.'</article>',$a);
		fwrite($fim,$replace);
		fclose($fim);
	}
	else {
		$main=$_POST['content'];
		$fim=fopen('../../pages/'.$_POST['nom'].'.html','r+'); 
		$a=file_get_contents('../../pages/'.$_POST['nom'].'.html');
		$re = '!<article id="main">([\\s\\S]*?)</article>!Ui'; 
		$replace=preg_replace($re,'<article id="main">'.$main.'</article>',$a);
		fwrite($fim,$replace);
		fclose($fim);
	}
//~ }  

    
//~ include("debug.php");   
    //~ $data="";
    //~ $main=$_POST['content'];
    //~ $fim=fopen('../../pages/'.$_POST['nom'].'.html','r+'); 
    //~ if ($a=file_get_contents('../../pages/'.$_POST['nom'].'.html')){
		//~ $data.="get_content : ".$a;
	//~ }
    //~ $re = '!<article id="main">([\\s\\S]*?)</article>!Ui'; 
    //~ $replace=preg_replace($re,'<article id="main">'.$main.'</article>',$a);
    //~ fwrite($fim,$replace);
    //~ fclose($fim);
	//~ debug($data);
?>
