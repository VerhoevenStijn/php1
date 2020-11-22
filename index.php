<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
  include_once "classes/Pagina_Data.class.php";
  $paginaData = new Pagina_Data();
  $paginaData->titel = "HTML Forms met PHP";
  $paginaData->content = include_once "views/navigatie.php";
  $navigatieIsClicked = isset($_GET['pagina']);
  if ($navigatieIsClicked) {
    $fileToLoad = $_GET['pagina'];
  } else {
    $fileToLoad = "zoeken";
  }
  $paginaData->content .=  include_once "views/$fileToLoad.php";
  $paginaData->css = "<link rel='stylesheet' href='css/styling.css'>";
  $pagina = include_once "templates/pagina.php";
  echo $pagina;
  ?>
