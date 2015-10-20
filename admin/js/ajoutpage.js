//~ Ajout d'une page : demande à l'utilisateur le nom de la page et le template voulu
//~ var button=document.getElementById("button");

function nouvellePage(id) {
	if (document.getElementById(id).style.display!="block") {
		document.getElementById("form").style.display="block";
	}
	return true;
}

