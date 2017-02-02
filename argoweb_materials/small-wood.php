<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Small things made of wood";
$it_title = "Piccole cose di legno";

$it_content = <<< IT_CONTENT
<h1>Piccole cose di legno</h1>
<p>Content was updated on 2013-06-11.</p>
  <section>
    <p>Un sistema per aprire caffettiere strette troppo forte (circa 2011). Abete e faggio.</p>
    <figure>
    <figcaption>Apri-caffettiera in azione. La parte inferiore è tenuta ferma dal bordo del tavolo.</figcaption>
    <img src="img/coffeepot-opener-3.jpg" alt="apri caffettiera in azione" >
    </figure>
    <figure>
    <figcaption>Apri-caffettiera, le parti costituenti</figcaption>
    <img src="img/coffeepot-opener-1.jpg" alt="apri caffettiera, le parti costituenti" >
    </figure>
  </section>
  <section>
    <p>Supporto per computer portatile, per tenere sollevato il pc ad una altezza
    adeguata per gli occhi (circa 2008). Realizzata in Medium Density Fiber, finitura con smalto spray.
    Adesso cose simili si trovano in tutti i negozi.</p>
    <figure>
      <figcaption>Chiuso</figcaption>
      <img src="img/supp-pc01.jpg" alt="chiuso" >
    </figure>
    <figure>
      <figcaption>Aperto, di lato.</figcaption>
      <img src="img/supp-pc02.jpg" alt="aperto, di lato" >
    </figure>
    <figure>
      <figcaption>Aperto, in uso.</figcaption>
      <img src="img/supp-pc03.jpg" alt="aperto, in uso." >
    </figure>
  </section>
  <section>
    <p>Cassetta degli attrezzi di legno, di grandi dimensioni (circa 2009).
    Abete e compensato, cerniere a metro, smalto nero a pennello.</p>
    <img src="img/toolbox.jpg" alt="porta attrezzi" >
    <img src="img/toolbox-blueprint.png" alt="il progetto" >
  </section>
  <section>
    <p>Una scatolina di compensato, molto semplice (circa 2008)</p>
    <img src="img/scatolina.jpg" alt="scatolina" >
  </section>
IT_CONTENT;

$en_content = <<< EN_CONTENT
<h1>Small things made of wood</h1>
<p>Content was updated on 2013-06-11.</p>
  <section>
    <p>Un sistema per aprire caffettiere strette troppo forte (circa 2011). Abete e faggio.</p>
    <figure>
    <figcaption>Apri-caffettiera in azione. La parte inferiore è tenuta ferma dal bordo del tavolo.</figcaption>
    <img src="img/coffeepot-opener-3.jpg" alt="apri caffettiera in azione" >
    </figure>
    <figure>
    <figcaption>Apri-caffettiera, le parti costituenti</figcaption>
    <img src="img/coffeepot-opener-1.jpg" alt="apri caffettiera, le parti costituenti" >
    </figure>
  </section>
  <section>
    <p>Supporto per computer portatile, per tenere sollevato il pc ad una altezza
    adeguata per gli occhi (circa 2008). Realizzata in Medium Density Fiber, finitura con smalto spray.
    Adesso cose simili si trovano in tutti i negozi.</p>
    <figure>
      <figcaption>Chiuso</figcaption>
      <img src="img/supp-pc01.jpg" alt="chiuso" >
    </figure>
    <figure>
      <figcaption>Aperto, di lato.</figcaption>
      <img src="img/supp-pc02.jpg" alt="aperto, di lato" >
    </figure>
    <figure>
      <figcaption>Aperto, in uso.</figcaption>
      <img src="img/supp-pc03.jpg" alt="aperto, in uso." >
    </figure>
  </section>
  <section>
    <p>Cassetta degli attrezzi di legno, di grandi dimensioni (circa 2009).
    Abete e compensato, cerniere a metro, smalto nero a pennello.</p>
    <img src="img/toolbox.jpg" alt="porta attrezzi" >
    <img src="img/toolbox-blueprint.png" alt="il progetto" >
  </section>
  <section>
    <p>Una scatolina di compensato, molto semplice (circa 2008)</p>
    <img src="img/scatolina.jpg" alt="scatolina" >
  </section>
EN_CONTENT;

require_once("template.php");
?>


