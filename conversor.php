<?php
  function conversaoTemperatura($temp_celsius) {
    $temp_fahrenheit = 0;

    $temp_fahrenheit = (($temp_celsius / 5) * 9) + 32;

    return $temp_fahrenheit;
  }
  conversaoTemperatura(32);
  conversaoTemperatura(20);
  conversaoTemperatura(-5);
?>
