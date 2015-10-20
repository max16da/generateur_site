
<?php 

	
	$header=file_get_contents('../../template/header.html');
	$nav=file_get_contents('../../template/nav.html');
	$footer=file_get_contents('../../template/footer.html');
	$tempMain=file_get_contents('../../template/'.$_POST['option'].'.html');
	$fp=fopen('../../pages/'.$_POST["nom"].'.html','w');
	fwrite($fp,$header.$nav.$tempMain.$footer);
	fclose($fp);
	

?>
