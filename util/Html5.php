<!DOCTYPE html>
<html lang="fr">
<?php
include 'fonc/intoBalise.php';

function debutHtml(string $title = "index.php", string $css = null)
{
	$text = "<!-- encodage utf-8 -->";
	$text .= intoBaliseN("meta", array("http-equiv= \"Content-Type\"","content=\"text/html; charset=utf-8\""));
	$text .= intoBalise($title, "title");
       if($css)
       {
	       $text .= intoBaliseN("link", array("rel=\"stylesheet\"","href=".$css));
       }
       $text = intoBaliseR($text, "head");
       echo $text."\n\t<body>";
}


function finHtml() 
{
       echo "\t</body>\n</html>\n";
}
?>
