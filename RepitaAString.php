<?php
  function repita($n, $str) : string
  {
    $string = "";
    for($i = 0; $i < $n; $i++)
    {
      $string .= $str;
    }
    return $string;
  }
?>