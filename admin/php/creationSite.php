<?php	

		$nom=$_POST['nomSite'];
		$fp=fopen('../../template/header.html','r+'); 
		$a=file_get_contents('../../template/header.html');
		$re='!<h1>([\\s\\S]*?)</h1>!'; 
		$replace=preg_replace($re,'<h1>'.$nom.'</h1>',$a);
		fwrite($fp,$replace);
		$b=file_get_contents('../../template/header.html');
		fclose($fp);
						
		$template=$_POST['option'];
		$template=file_get_contents('../../template/'.$template.'.html');
		$nav=file_get_contents('../../template/nav.html');
		$footer=file_get_contents('../../template/footer.html');

		$findex=fopen('../../index.html','w');
		fwrite($findex,$b.$nav.$template.$footer);
		fclose($findex);
		
		header("Location:".str_replace('php/creationSite.php','index.php?page=index',$_SERVER['REQUEST_URI']));
		exit;
		
	
?>
