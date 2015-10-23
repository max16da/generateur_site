//~ Ajout d'une page : demande à l'utilisateur le nom de la page et le template voulu

var encours="";
function nouvellePage(id) {
	if (document.getElementById(id).style.display!="block") {
		document.getElementById(id).style.display="block";

	}
	else {
		if (encours != "") document.getElementById(encours).style.display = "none";
			document.getElementById(id).style.display ="none";
			encours = id;	
	}
	return true;
}
