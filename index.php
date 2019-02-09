<?php
include 'util/debutSkelXhml.html';
include 'fonc/intoBalise.php';

$dep = file("docs/departement.txt");
$pref = file("docs/prefecture.txt");
$text = "\t";
$namePref = $nameSPref = "";
$cpt = 0;

foreach ($pref as $i) {
	$i = explode("(", $i);
	$j = "";
	foreach ($i as $key) {
		$j .= $key;
	}
	$i = explode(")", $j);
	$j = "";
	foreach ($i as $key) {
		$j .= $key;
	}
	$i = explode("'", $j);
	$j = "";
	foreach ($i as $key) {
		$j .= $key;
	}

	$perfLigne = explode(",", $j);
  ///modif pref par i
 	if ($perfLigne[3] == "préfecture"){
		$perfLigne[3] = 0;
	} else {
		$perfLigne[3] = 1;
	}
  foreach ($dep as $i)
  {
	  if($cpt){
	  	$i = explode(",", $i);
	  	$text .= "\t".intoBaliseR($i[1], "li");
  		$text2 = "\n";

  		for ($j=0; $j < 5; $j++)
	  	{
	  		if ($j != 1 )
	  		{
			  	$text2 .= "\t".intoBaliseR((intoBalise($name[$j] . " : ", "b").$i[$j]), "li");
		  	}
		  }
		  foreach ($pref as $key ) {
		  	if ($key[0] == $i[0]){
		  		if ($key[3] == 0){
	  				$namePref = $pref[1];
	  			} else {
	  				$nameSPref .= ", " . $key[1];
	  			}
	  		}
	  	}
			$text2 .= "\t".intoBaliseR((intoBalise("Prefecture : ", "b").$namePref), "li");
			$text2 .= "\t".intoBaliseR((intoBalise("Sous-prefecture : ", "b").$nameSPref), "li");
	  	$text .= intoBaliseR($text2."\t", "ul");
  	} else
  	{
  		$name = explode(",", $i);
	  	$cpt = 1;
	  }
  }
}
echo intoBaliseR($text, "ul");

include 'util/finSkelXhml.html';
?>
