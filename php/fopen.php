<?php
include 'util/debutSkelXhml.html';
include 'fonc/intoBalise.php';

$text = $text2 = "\n";
$fp = fopen("docs/departement.txt", "r");
if(!$fp)
{ // vérifie que le pointeur de fichier est valide
	echo("Impossible d'ouvrir fichier.txt");
}
else
{
  $ligne = fgets($fp, 256);
  $ligne = rtrim($ligne);
  $name = explode(",", $ligne);
  while (!feof($fp))
  { // répète jusqu'à la fin de fichier
    $ligne = fgets($fp, 256); // lit une ligne
    $ligne = rtrim($ligne); // enlève le retour chariot
    //print_r($dep);
    if ($ligne){
      $dep = explode(",", $ligne);
      $text .= "\t".intoBaliseR($dep[1], "li");
      $text2 = "\n";
      for ($i=0; $i < 5; $i++)
      {
        if ($i != 1)
        {
          $text2 .= "\t".intoBaliseR((intoBalise($name[$i] . " : ", "b").$dep[$i]), "li");
        }
      }
    $text .= intoBaliseR($text2."\t", "ul");
    }
  }
  fclose($fp);
}

echo intoBaliseR($text, "ul");
include 'util/finSkelXhml.html';
?>
