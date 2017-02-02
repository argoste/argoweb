<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Network router stand";
$it_title = "Supporto per router di rete";


$it_content = <<< IT_CONTENT
  <h1>Supporto per router di rete</h1>
  <p>Anno 2009</p>
  <p>Just take a piece of aluminium L bar, cut and bend it.</p>
  <figure>
    <figcaption>Come si presenta</figcaption>
    <img src="img/router-stand-01.jpg" alt="" />
  </figure>
  <figure>
    <figcaption>Come si usa</figcaption>
    <img src="img/router-stand-02.jpg" alt="" />
  </figure>
IT_CONTENT;


$en_content = <<< EN_CONTENT
  <h1>Network router stand</h1>
  <p>Year 2009</p>
  <p>Basta prendere un pezzo di profilato di alluminio a L, tagliarlo e piegarlo.</p>
  <figure>
    <figcaption>How it looks like</figcaption>
    <img src="img/router-stand-01.jpg" alt="un aggeggio di alluminio di circa 12 cm per 16 cm" />
  </figure>
  <figure>
    <figcaption>How to use it</figcaption>
    <img src="img/router-stand-02.jpg" alt="si vede il router e il suo supporto" />
  </figure>
EN_CONTENT;

require_once("template.php");
?>



