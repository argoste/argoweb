<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$it_title = "Note sulla creazione di un sito web";
$en_title = $it_title;
$it_content = <<< IT_CONTENT
    <article>
      <h1>Note sulla creazione di un sito web</h1>
      <p>Stefano Carlesso <time >2011</time></p>
      <p>Le fasi di realizzazione di un sito web vengono qui brevemente riassunte,
      per come le ho studiate. Non posso assicurare né la completezza né la correttezza di queste informazioni.</p>
      <h3>Nota in versi</h3>
        <div class="verse">Questo diagramma a blocchi </div>
        <div class="verse">non è un diagramma di flusso:</div>
        <div class="verse">non c'è un Start e un End </div>
        <div class="verse">ben definito. </div>
        <div class="verse">Seguo qui</div>
        <div class="verse">nè un modello a Cascata,</div>
        <div class="verse">nè un modello a V,</div>
        <div class="verse">nè una pratica Code and fix,</div>
        <div class="verse">ma un misto.</div>

      <h3>Pre-produzione</h3>
        <figure>
        <object type="image/svg+xml" data="img/website-building/pre-produzione.svg" alt="Si considerano le necessità degli utenti e dei committenti, i metodi e gli strumenti esistenti, le risorse di cui si dispone (omissis)">SVG here</object></figure>

      <h3>Produzione, visione d'insieme</h3>
        <figure>
        <object type="image/svg+xml" data="img/website-building/produzione.svg" alt="I tre ingredienti sono: contenuti, struttura logica, aspetto grafico">SVG here</object></figure>

        <h4>Procurarsi i contenuti</h4>
          <figure>
          <object type="image/svg+xml" data="img/website-building/contenuti.svg" alt="Prodotti da noi stessi o da terze parti">SVG here</object></figure>

        <h4>Realizzare la struttura logica</h4>
          <figure>
          <object type="image/svg+xml" data="img/website-building/struttura-logica.svg" alt="I file HTML permettono di marcare porzioni di testo ed elementi multimediali in modo da assegnare loro un significato: markup semantico">SVG here</object></figure>

        <h4>Realizzare l'aspetto grafico</h4>
          <figure>
          <object type="image/svg+xml" data="img/website-building/layout.svg" alt="I fogli di stile permettono di definire in dettaglio l'aspetto che avranno le pagine web.">SVG here</object></figure>


    </article>

IT_CONTENT;
$en_content = $it_content;
require_once("template.php");
?>





