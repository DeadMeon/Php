<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include 'fonc/intoBalise.php';

function debutHtml(string $title = "index.php", string $css = null) : string
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


function finHtml() : string
{
       echo "\t</body>\n</html>\n";
}
?>
