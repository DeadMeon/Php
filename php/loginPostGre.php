<?php
function valideForm($method, $tabCles) {
	foreach ($tabCles as $cle) {
	   if (!isset($method[$cle]))
	     return FALSE;
  }
	return TRUE;
}

// noms des champs obligatoires
$tab = array('host', 'user', 'password');
if (valideForm($_POST, $tab)) {
  include("php/connectPostGre.php");
  include("php/request.php");
} else {
  include("html/loginPostGre.html");
}
?>
