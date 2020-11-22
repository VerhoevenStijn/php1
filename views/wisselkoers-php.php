<?php

$calculateExchangeRate = isset( $_POST['wisselkoers-submitted']);
if ($calculateExchangeRate) {
  $munteenheid = $_POST['munteenheid'];
  $output = calculateExchange($munteenheid);
} else {
  $output = include_once "views/wisselkoers.php";
}
return $output;

function calculateExchange($munteenheid) {
  $euroWaarde = $_POST['euroWaarde'];
  $waarde= "";
  if ($munteenheid === 'Amerikaanse Dollar') {
    $waarde = 1.18;
  } elseif ($munteenheid === 'Britse Pond') {
    $waarde = 0.90;
  } elseif ($munteenheid === 'Russische Roebel') {
    $waarde = 90.72;
  } elseif ($munteenheid === 'Chinese Yuan') {
    $waarde = 7.91;
  } else {
  $waarde = 1.08;
  }

  $value = $euroWaarde*$waarde;
  $terugSturen = "<div>$euroWaarde euro is $value $munteenheid waard.";
  $terugSturen .= "<p><a href='index.php?pagina=wisselkoers' style='text-decoration=none; color:white;'>Bereken opnieuw</a></p></div>";
  return $terugSturen;
  }

?>
