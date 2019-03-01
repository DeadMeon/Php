<?php
include "util/debutSkelXhml.html";
include "fonc/intoBalise.php";

  $tab = array();
	for($i = -1; $i<13; $i++){
		if ($i == -1){
			$tab[$i+1] = "\t\t\t".intoBalise('x', 'td')."\n";
		} else {
			$tab[$i+1] = "\t\t\t".intoBalise($i, 'td')."\n";
		}
	}
  
  for($i = 0; $i<13; $i++){
		for($j = -1; $j<13; $j++){
			if ($j == -1){
				$tab[$i+13*($j+1)] = "\t\t\t".intoBalise($i, 'td')."\n";
			} else {
				$tab[$i+13*($j+1)] = "\t\t\t".intoBalise(($i*$j), 'td')."\n";
			}
		}
  }

  $text = "\n";
  for ($i=0 ; $i < 13 ; $i++ ) {
    $text2 = "\n";
    for ($j=0 ; $j < 14 ; $j++ ) {
      $text2 .= $tab[$i+13*$j];
    }
    $text .= "\t\t".intoBalise($text2, "tr")."\n";
  }

  echo intoBalise($text, "table", array("style='width:100%'"));


include "util/finSkelXhml.html";
?>
