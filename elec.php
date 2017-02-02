<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Projects concerning electricity";
$it_title = "Progetti che hanno a che fare con l'elettricità";


$en_content = <<< EN_CONTENT
<h1>Projects concerning electricity</h1>
<section>
  <h3>My first blinker</h3>
  <p>Year 2012</p>
  <p>This simple circuit is called astable multivibrator, and can be used for many purposes. Here it makes a LED blink.
  All components are discrete and analog.
   Nowadays it is more common to build multivibrators with Integrated Circuits (IC).</p>
   <p>I only had polarized capacitors, so I used them. The strange thing is that it works.</p>
  <figure>
    <figcaption>Top view of my first blinker</figcaption>
    <img src="img/blinker-A-top.jpg" alt="circuit built onto a perfboard >
  </figure>
  <figure>
    <figcaption>Bottom view of my first blinker</figcaption>
    <img src="img/blinker-A-bottom.jpg" alt="circuit built onto a perfboard >
  </figure>
</section>
<section>
  <h3>My second blinker</h3>
  <p>Year 2012</p>
  <p>This one has variable frequency and is slightly better made.</p>
  <figure>
    <figcaption>Top view of my second blinker</figcaption>
    <img src="img/blinker-B.jpg" alt="circuit built onto a perfboard >
  </figure>
</section>
<section>
  <h3>Sealed electrolytic generator</h3>
  <p>Year 2012</p>
  <p>My previous batteries, with one or multiple cells, were opened on the top. My goal was to build a sealed one.</p>
   <p>This is a well-known generator. Copper and zinc react with salted water (NaCl). It has a single element or cell.
   The other materials are: a glass jar with metal screw lid, rubber from an eraser, epoxy glue.</p>
   <p>I measured a 0.75 V  potential difference. I saw no light from a bulb: the current is too small.</p>
  <figure>
    <figcaption>the battery</figcaption>
    <img src="img/volta-battery-1.jpg" alt="" >
  </figure>
</section>
<section>
  <h3>Post-apocaliptic style torch</h3>
  <p>Year 2012</p>
  <p>This portable light has a white LED and two AA batteries.</p>
  <figure>
    <figcaption>Fallout torch</figcaption>
    <img src="img/madmax-torch.jpg" alt="Small torch >
  </figure>
</section>
<section>
  <h3>Power supply</h3>
  <p>Year 2012</p>
  <p>This is a 230 V AC to 5 V DC converter. The old type.</p>
  <figure>
    <figcaption>External view</figcaption>
    <img src="img/power-supply-outside.jpg"
    alt="the power supply is contained in a plastic box>" >
  </figure>
  <figure>
    <figcaption>Internal view</figcaption>
    <img src="img/power-supply-internal.jpg" alt="internal components: transformer, diodes, capacitors, LM78 IC" >
  </figure>
</section>
EN_CONTENT;


$it_content = <<< IT_CONTENT
<h1>Progetti che hanno a che fare con l'elettricità</h1>
<section>
  <h3>Il mio primo lampeggiatore</h3>
  <p>Year 2012</p>
  <p>Questo semplice circuito si chiama multivibratore astabile, e può essere usato per molte applicazioni. In questo caso, fa lampeggiare un LED.
  Tutti i componenti sono discreti (cioé singoli) e analogici. Attualmente è più comune la costruzione di multivibratori usando circuiti integrati.</p>
   <p>Avevo solo condensatori polarizzati, allora ho usato quelli. Lo schema che ho utilizzato prevedeva quelli non polarizzati.
   La cosa strana è che funziona.</p>
  <figure>
    <figcaption>Lato componenti del mio primo lampeggiatore</figcaption>
    <img src="img/blinker-A-top.jpg" alt="circuito costruito su una basetta millefori" >
  </figure>
  <figure>
    <figcaption>Lato saldature del mio primo lampeggiatore</figcaption>
    <img src="img/blinker-A-bottom.jpg" alt="circuito costruito su una basetta millefori" >
  </figure>
</section>
<section>
  <h3>Il mio secondo lampeggiatore</h3>
  <p>Year 2012</p>
  <p>Questo ha frequenza variabile ed è costruito un po' meglio.</p>
  <figure>
    <figcaption>Lato componenti del mio secondo lampeggiatore</figcaption>
    <img src="img/blinker-B.jpg" alt="circuito costruito su una basetta millefori" >
  </figure>
</section>
<section>
  <h3>Generatore elettrochimico sigillato</h3>
  <p>Year 2012</p>
  <p>Le mie pile precedenti, con una o più celle, erano aperte nella parte superiore. L'obiettivo era quello di costruirne una sigillata.</p>
   <p>Questo è un ben noto generatore. Rame e zinco reagiscono con acqua salata (NaCl). Ha un singolo elemento o cella.
   Gli altri materiali sono un barattolo di vetro con coperchio metallico a vite, una gomma da cancellare, colla epossidica.</p>
   <p>Ho misurato una differenza di potenziale di 0.75 V. Non ho osservato nessuna luce da una lampadina:
   la corrente è troppo piccola.</p>
  <figure>
    <figcaption>la pila</figcaption>
    <img src="img/volta-battery-1.jpg" alt="" >
  </figure>
</section>
<section>
  <h3>Torcia in stile post-apocalittico</h3>
  <p>Year 2012</p>
  <p>Questa luce portatile ha un LED bianco e due batterie AA.</p>
  <figure>
    <figcaption>Torcia Fallout</figcaption>
    <img src="img/madmax-torch.jpg" alt="piccola torcia" >
  </figure>
</section>
<section>
  <h3>Alimentatore</h3>
  <p>Year 2012</p>
  <p>Converte 230 V AC in 5 V DC. Tipo tradizionale.</p>
  <figure>
    <figcaption>Aspetto esterno</figcaption>
    <img src="img/power-supply-outside.jpg"
    alt="l'alimentatore è contenuto in un contenitore di plastica" >
  </figure>
  <figure>
    <figcaption>L'interno</figcaption>
    <img src="img/power-supply-internal.jpg" alt=",
    "i componenti interni: trasformatore, diodi, condensatori, integrato LM78" >
  </figure>
</section>
IT_CONTENT;

require_once("template.php");
?>
