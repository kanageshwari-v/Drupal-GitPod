<?php
function alphabet_position($string) 
{
    $lower = strtolower($string);
    $alphabet = range("a", "z");
    $result = "";

    for ($i=0; $i<strlen($lower); $i++)
    {
      $filter = array_search($lower[$i], $alphabet);
      if ($filter)
        {
          $result .= $filter+1 ." ";
        }
    }
    
    return $result;
}

echo alphabet_position('The sunset sets at twelve o\'clock');
//output 20 8 5 19 21 14 19 5 20 19 5 20 19 20 20 23 5 12 22 5 15 3 12 15 3 11
?>