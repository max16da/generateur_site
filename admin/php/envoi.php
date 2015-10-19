
<?php 
//~ if (!isset($_POST["nom"]) && !isset($_POST['options']) || !empty($_POST["nom"])){
	//~ foreach($_POST['options'] as $valeur) {
		//~ copy("../template/".$valeur.".html","../pages/".htmlspecialchars($_POST["titre"]).".html"); 
	//~ }
	$header=file_get_contents('../../template/header.html');
	$nav=file_get_contents('../../template/nav.html');
	$footer=file_get_contents('../../template/footer.html');
	$main=$_POST['content'];
	$tempMain=file_get_contents('../../template/'.$_POST['option'].'.html');
	$fp=fopen('../../pages/'.$_POST["nom"].'.html','w');
	fwrite($fp,$header.$nav.$main.$footer);
	fclose($fp);

//~ }
//~ else {
	//~ echo "saisie incorrecte";
//~ } 



//~ $data='data.html';
//~ $
//~ if (!copy(

//~ $fTemplate='../templatePage/template1.html';
//~ if ($handle=fopen($fTemplate,'r')) {
	//~ echo "fhgdkjg";
	//~ $contents=fread($handle,filesize($fTemplate));
//~ 
	//~ $a=file_get_contents($contents);
	//~ echo $a;
	//~ fclose($handle);
	//~ preg_replace("/(.*), (.*)/", "$0 --> $1 $2", $a);
	//~ $replace=preg_replace('#<main>([\s\S]*?)<\/main>#','<main>'.$_POST['content'].'</main>',$a);
	//~ error_log($replace);
	//~ ouvre et créer le fichier data.html qui contient le contenu inséré par l'auteur
	//~ $fp=fopen('data.html','w');
	//~ fwrite($fp,$replace);
	//~ fclose($fp);
//~ }
//~ else{
	//~ header('Location: ../html/404.html');
	//~ exit();
//~ }




//~ $fpdata=fopen('data2.html','w');
//~ fwrite($fpdata,$_POST['content']);
//~ fclose($fpdata);
//~ header('Location: data.html');
//~ exit();
?>
