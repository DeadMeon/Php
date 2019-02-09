<?php
function intoBalise(string $contenu, string $element=null, array $params=null ) : string
{
       $element2 = $element;
       if ($params)
       {
              foreach ($params as $value) {
                     $value = rtrim($value);
                     $element .= " ".$value;
              }
       }
  return "<".$element.">".$contenu."</".$element2.">";
}


function intoBaliseR(string $contenu, string $element=null, array $params=null ) : string
{
       $element2 = $element;
       if ($params)
       {
              foreach ($params as $value) {
                     $value = rtrim($value);
                     $element .= " ".$value;
              }
       }
  return "\t<" . $element . ">\n\t\t" . $contenu . "\n\t</" . $element2 . ">\n";
}


function intoBaliseN(string $element=null, array $params=null ) : string
{
       if ($params)
       {
              foreach ($params as $value) {
                     $value = rtrim($value);
                     $element .= " ".$value;
              }
       }
  return "\t<" . $element . "/>\n";
}

?>
