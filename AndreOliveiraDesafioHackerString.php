<?php
function convertToHackerString(string $String) : string
{
  $array = str_split($String);
  $arrayLength = count($array);
  for($i = 0; $i < $arrayLength; $i++)
  {
    switch($array[$i])
    {
      case "A" : $array[$i] = "@"; break;
      case "B" : $array[$i] = "8"; break;
      case "C" : $array[$i] = "("; break;
      case "D" : $array[$i] = "D"; break;
      case "E" : $array[$i] = "3"; break;
      case "F" : $array[$i] = "F"; break;
      case "G" : $array[$i] = "6"; break;
      case "H" : $array[$i] = "#"; break;
      case "I" : $array[$i] = "!"; break;
      case "J" : $array[$i] = "J"; break;
      case "K" : $array[$i] = "K"; break;
      case "L" : $array[$i] = "1"; break;
      case "M" : $array[$i] = "M"; break;
      case "N" : $array[$i] = "N"; break;
      case "O" : $array[$i] = "0"; break;
      case "P" : $array[$i] = "P"; break;
      case "Q" : $array[$i] = "Q"; break;
      case "R" : $array[$i] = "R"; break;
      case "S" : $array[$i] = "$"; break;
      case "T" : $array[$i] = "7"; break;
      case "U" : $array[$i] = "U"; break;
      case "V" : $array[$i] = "V"; break;
      case "W" : $array[$i] = "W"; break;
      case "X" : $array[$i] = "X"; break;
      case "Y" : $array[$i] = "Y"; break;
      case "Z" : $array[$i] = "2"; break;
    }
  }
  $String = implode("", $array);
	return $String;
}
