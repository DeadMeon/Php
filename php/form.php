<?php

function valideForm($method, $tabCles) {
	foreach ($tabCles as $cle) {
	   if (!isset($method[$cle]))
	     return FALSE;
  }
	return TRUE;
}

// noms des champs obligatoires
$tab = array('nom', 'prenom', 'ville', 'age', 'musique');
if (valideForm($_POST, $tab)) {
       echo "<html>\n<body>\n<p>Bienvenue ";
       echo $_POST["nom"] . " " . $_POST["prenom"];
       echo "<br>Vous habitez a ";
       echo $_POST["ville"];
       echo "<br>Votre age est ";
       echo $_POST["age"];
       echo "<br>Vous aimez ces styles de musique : ";
       foreach ($_POST["musique"] as $key) {
              echo " " . $key;
       }
       echo "</p>\n</body>\n</html>";
} else {
       // retour au formulaire avec récupération des saisies
       include("html/form.html");
}
?>
