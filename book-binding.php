<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Book binding";
$it_title = "Rilegatura";

$it_content = <<< IT_CONTENT
  <h1>Rilegatura</h1>
  <p>Anno 2013</p>
  <p>Ci sono molti modi di rilegare singoli fogli per formare un piccolo libro</p>
  <figure>
    <figcaption>con filo, fronte</figcaption>
    <img src="img/book-binding11.jpg" alt="" />
  </figure>
  <figure>
    <figcaption>con filo, retro</figcaption>
    <img src="img/book-binding12.jpg" alt="" />
  </figure>
    <figure>
    <figcaption>con bullone, fronte</figcaption>
    <img src="img/book-binding22.jpg" alt="" />
  </figure>
    <figure>
    <figcaption>con bullone, retro</figcaption>
    <img src="img/book-binding21.jpg" alt="" />
  </figure>
  <p>Scegliendo il metodo con bullone, si possono fare i buchi con un trapano, mentre per il metodo con filo è meglio usare un punteruolo a mano.
  Il metodo con filo ha prodotto un libro più facile da usare.</p>
    <h3>Nota</h3>
  <p>Many old works of literature like these are public domain. You can <strong>lawfully</strong> download them from
  <a href="http://www.gutenberg.org/">Project Gutemberg</a> which I thanks very much because I enjoyed the novels.</p>

  <p>Il metodo di rilegatura l'ho imparato su questi due siti:
   <a href="http://www.franuvolo.it/sito/idee/85-come-rilegare-un-libro.html">Fra Nuvolo</a> ed
  <a href="http://www.elektrosoft.it/tutorials/rilegare-fotocopie/tecniche-rilegare-fotocopie.htm">Elektrosoft</a>
   </p>
IT_CONTENT;


$en_content = <<< EN_CONTENT
  <h1>Book binding</h1>
  <p>Year 2013</p>
  <p>There are many ways to bind sheets to make a small book."</p>
  <figure>
    <figcaption>thread method, front</figcaption>
    <img src="img/book-binding11.jpg" alt="" />
  </figure>
  <figure>
    <figcaption>thread method, rear</figcaption>
    <img src="img/book-binding12.jpg" alt="" />
  </figure>
    <figure>
    <figcaption>screw bolt method, front</figcaption>
    <img src="img/book-binding22.jpg" alt="" />
  </figure>
    <figure>
    <figcaption>screw bolt method, rear</figcaption>
    <img src="img/book-binding21.jpg" alt="" />
  </figure>
  <p>If you use the bolt method you can use a drill to cut the holes, while if you prefer the thread, it is better to use
  a hand awl. The thread method resulted in a more usable book.</p>


    <h3>Note</h3>
  <p>Many old works of literature like these are public domain. You can <strong>lawfully</strong> download them from
  <a href="http://www.gutenberg.org/">Project Gutemberg</a> which I thanks very much because I enjoyed the novels.</p>
  <p>I've learned these binding method from two sites:
   <a href="http://www.franuvolo.it/sito/idee/85-come-rilegare-un-libro.html">Fra Nuvolo</a> and
  <a href="http://www.elektrosoft.it/tutorials/rilegare-fotocopie/tecniche-rilegare-fotocopie.htm">Elektrosoft</a>
   </p>
EN_CONTENT;

require_once("template.php");
?>


