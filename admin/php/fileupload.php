<html>
<body>
<?php
 //~ $repertoireDestination =$_SERVER['SERVER_NAME'].str_replace('admin/php/fileupload.php',"images/",$_SERVER["REQUEST_URI"]);

$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/images/";
    //~ $repertoireDestination =$_SERVER['SERVER_NAME'].str_replace('admin/php/fileupload.php',"images/",$_SERVER["REQUEST_URI"]);
    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                     $repertoireDestination.$nomOrigine)) {
	echo "<script>parent.document.getElementById('listeImage').textContent='http://".$_SERVER['SERVER_NAME'].str_replace('fileupload.php',"images/",$_SERVER["REQUEST_URI"]).$nomOrigine."';</script>";
    } else {
        //~ echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                //~ "le déplacement du fichier temporaire a échoué".
                //~ " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}
?>

</body>
</html>
