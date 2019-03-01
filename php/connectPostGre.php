<?php

$strConnex="host=" . $_POST["host"] . " dbname=" . $_POST["user"] . " user=" . $_POST["user"] . " password=" . $_POST["password"];
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
  print "<p>Connexion établie !</p>";
} else {
  print "<p>Erreur lors de la connexion ...</p>";
  exit;
}

?>
