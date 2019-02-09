<?php
function intoBalise(string $contenu, string $element=null, array $params=null ) : string
{
  $element2 = $element;
  if ($params)
  {
    foreach ($params as $value) {
      $element .= " ".$value;
    }
  }
  return "<".$element.">".$contenu."</".$element2.">";
}

function intoBaliseR(string $contenu, string $element=null, array $params=null ) : string
{
  return "\t".intoBalise($contenu, $element, $params)."\n";
}
?>
