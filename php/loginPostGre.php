<?php
function valideForm($method, $tabCles) {
	foreach ($tabCles as $cle) {
	   if (!isset($method[$cle]))
	     return FALSE;
  }
	return TRUE;
}

include("html/loginPostGre.html");
$tab = array('host', 'user', 'password');
if (valideForm($_POST, $tab)) {
  include("php/connectPostGre.php");
  include("html/connectPostGre.html");
	sleep(10);
  include("php/request.php");
} else {
  include("html/errorPostGre.html");
}
?>
