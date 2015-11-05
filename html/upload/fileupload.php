<html>
<body>
<?php
$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/images/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
		
		echo "L'image ".$nomDestination." a été uploadée";
		echo "<script>parent.document.getElementById('listeImage').textContent='http://".$_SERVER['SERVER_NAME'].str_replace('fileupload.php',"images/",$_SERVER["REQUEST_URI"]).$nomDestination."';</script>";
        //~ echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                //~ " a été déplacé vers ".$nomDestination;
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}
?>

</body>
</html>
