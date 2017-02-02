<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Soldering iron stand";
$it_title = "Supporto per saldatore";


$en_content = <<< EN_CONTENT
  <h1>Soldering iron stand</h1>
  <p>Year 2013</p>
  <p>For soft soldering</p>
  <figure>
    <figcaption>How it looks like</figcaption>
    <img src="img/iron-stand-02.jpg" alt="" >
  </figure>
  <figure>
    <figcaption>How you use it</figcaption>
    <img src="img/iron-stand-04.jpg" alt="" >
  </figure>
EN_CONTENT;


$it_content = <<< IT_CONTENT
  <h1>Supporto per saldatore</h1>
  <p>Anno 2013</p>
  <p>Per saldatura a stagno</p>
  <figure>
    <figcaption>Come si presenta</figcaption>
    <img src="img/iron-stand-02.jpg" alt="" >
  </figure>
  <figure>
    <figcaption>Come si usa</figcaption>
    <img src="img/iron-stand-04.jpg" alt="" >
  </figure>
IT_CONTENT;
require_once("template.php");
?>
