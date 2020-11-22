<?php

  $quizIsSubmitted = isset( $_POST['quiz-submitted'] );
  if ( $quizIsSubmitted ){
    $antwoord = $_POST['antwoord'];
    $output = toonQuizAntwoord($antwoord);
    $output .= "<div><pre>";
    $output .= print_r($_POST, true);
    $output .= "</pre></div>";
  } else {
    $output = include_once "views/quiz-form.php";
  }
  return $output;


  function toonQuizAntwoord( $antwoord ){
  $terugSturen = "<div><p>Je klikte op $antwoord";
  if ($antwoord === "ja") {
    $terugSturen .= " - oefenen oefenen oefenen";
  }
    $terugSturen .= "</p>";
    $terugSturen .= "<p><a href='index.php?pagina=quiz' style='text-decoration:none; color:white'>Quiz opnieuw doen?</a></p></div>";
  return $terugSturen;
  }

 ?>
