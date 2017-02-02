<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Unpolished rings";
$it_title = "Anelli grezzi";


$it_content = <<< IT_CONTENT
<h1>Anelli grezzi</h1>
<p>Anno 2012</p>
<p>Sono stati fatti per provare a lavorare un metallo malleabile, in particolare lo zinco. Dovrebbero
ricordare quegli anelli antichi usati dalle persone importanti per firmare i documenti.</p>
<figure>
  <figcaption>vista frontale 1</figcaption>
  <img src="img/rings-5.jpg" alt="gioielli">
</figure>

<figure>
  <figcaption>vista frontale 2</figcaption>
  <img src="img/rings-8.jpg" alt="gioielli">
</figure>

<figure>
  <figcaption>vista di lato</figcaption>
  <img src="img/rings-9.jpg" alt="gioielli">
</figure>
<p>L'anello di sinistra usa una moneta da 0.05 &euro;, quello di destra una bella moneta della Polonia, quello centrale un ricciolo di zinco.</p>
IT_CONTENT;


$en_content = <<< EN_CONTENT
<h1>Unpolished rings</h1>
<p>Year 2012</p>
<p>These were made to try to work with soft metal, in particular zinc. They should
be similar to the ancient rings important used by important people to sign documents.</p>
<figure>
  <figcaption>front view 1</figcaption>
  <img src="img/rings-5.jpg" alt="jewels" />
</figure>

<figure>
  <figcaption>front view 2</figcaption>
  <img src="img/rings-8.jpg" alt="jewels" />
</figure>

<figure>
  <figcaption>side view</figcaption>
  <img src="img/rings-9.jpg" alt="jewels" />
</figure>
<p>Left ring uses a 0.05 &euro; coin, right one uses a beautiful coin from Poland, central one a small piece of zinc.</p>
EN_CONTENT;
require_once("template.php");
?>

<article>


