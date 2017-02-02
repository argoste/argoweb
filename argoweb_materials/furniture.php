<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Furniture";
$it_title = "Arredamento";
$en_content = <<< EN_CONTENT
<h2>Shelf for a bedroom</h2>
<figure>
  <figcaption>
  A narrow and tall shelf for a yet furnished room.
  The frame is made of spruce splints, the boards are made of thick plywood. Screws keep it together.
  </figcaption>
  <embed src="img/scaffale-camera.svg" alt="scaffale alto in legno">
</figure>
  <h3>Wall bar</h3>
  <p>Gym gear, made of solid wood and steel. 2009.</p>
  <img src="img/spalliera.jpg" alt="a bar attached to the wall, to lift yourself"
  title="a bar attached to the wall, to lift yourself" >
  <h3>Wardrobe</h3>
  <p>Wardrobe made of chipboard, size and style similar to the pieces of furniture I already had. 2009.</p>
  <img src="img/mobile-basso.jpg" alt="two-door wardrobe"
  title="two-door wardrobe" >
EN_CONTENT;


$it_content = <<< IT_CONTENT
<h2>Scaffale per una camera</h2>
<figure>
  <figcaption>
  Scaffale alto e stretto per una camera già arredata.
La struttura principale è fatta di listelli d'abete, i ripiani in multistrato. Assemblaggio con viti.
  </figcaption>
  <embed src="img/scaffale-camera.svg" alt="scaffale alto in legno">
</figure>

<h2>Spalliera per esercizi</h2>
<figure>
  <figcaption>Attrezzo ginnico in legno massello e acciaio. Anno 2009.
  </figcaption>
  <img src="img/spalliera.jpg" alt="una sbarra attaccata alla parete, per sollevarsi"
  alt="una sbarra attaccata alla parete, per sollevarsi" >
</figure>



<h2>Guardaroba</h2>
<p>Mobile guardaroba in truciolare, di dimensioni e stile compatibili con i mobili che già avevo. 2009.</p>
<img src="img/mobile-basso.jpg" alt="mobile a due ante"); ?>"
title="mobile a due ante" >
IT_CONTENT;

require_once("template.php");
?>
