<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Short essays";
$it_title = "Saggi brevi";
$it_content = <<< IT_CONTENT
    <h1>Saggi brevi</h1>
    <ul>
      <li><a href="website-planning.php">This website design principles &amp; ideas</a></li>
      <li><a href="website-building.php">Note sulla creazione di un sito web</a></li>
      <li><a href="privacy-1.php">La privacy, oggi</a></li>
      <li><a href="privacy-2.php">Privacy, parte 2</a></li>
      <li><a href="lezioni-linux.php">Breve lezione su GNU/Linux</a></li>
      <li><a href="eccezionale-o-progressivo.php">Innovazione: rivoluzione o progresso?</a></li>
      <li><a href="geni-e-ambiente.php">Geni e ambiente</a></li>
      <li><a href="interfacce.php">Interfacce, parte I</a></li>
    </ul>
IT_CONTENT;
$en_content = $it_content;
require_once("template.php");
?>
