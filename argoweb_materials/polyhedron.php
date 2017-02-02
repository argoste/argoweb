<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Polyhedrons made of paper and other materials";
$it_title = "Poliedri di cartone e d'altri materiali";

$it_content = <<< IT_CONTENT
  <h1>Poliedri di cartone e d'altri materiali</h1>
  <p>Anno 2013</p>

  <figure>
    <figcaption>Un solido archimedeo, l'ottaedro troncato. Le facce sono in totale 14, di cui 8 esagonali e 6 quadrate. Ogni faccia
  quadrata è adiacente a 4 esagoni. Ogni faccia esagonale è adiacente a 3 quadrati e 3 esagoni.</figcaption>
    <img src="img/polyhedron-4.jpg" alt="" />
  </figure>

  <figure>
    <figcaption>Questo solido ha le 8 facce a forma di aquilone.</figcaption>
    <img src="img/polyhedron-6.jpg" alt="" />
  </figure>

  <figure>
    <figcaption>Questa coppia di solidi può essere usata per tassellare lo spazio.</figcaption>
    <img src="img/polyhedron-2.jpg" alt="" />
  </figure>

  <figure>
    <figcaption>Prendete un cubo. Congiungendo i centri dei ogni coppia di facce adiacenti, otterrete un ottaedro regolare.
  Cartoncino piegato e colla. Filo da cucire</figcaption>
    <img src="img/polyhedron-1.jpg" alt="" />
  </figure>

  <figure>
    <figcaption>Da due tetraedri si può ottenere un ottaedro. Cannucce da bibita unite con filo sottile.</figcaption>
    <img src="img/polyhedron-14.jpg" alt="" />
  </figure>
IT_CONTENT;

$en_content = $it_content;

require_once("template.php");
?>


