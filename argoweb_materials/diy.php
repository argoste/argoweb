<?php
require_once("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Do It Yourself activities";
$it_title = "Attivitá di Fai Da Te";

$en_content = <<< EN_CONTENT
<h1>Do It Yourself activities</h1>
<ul>
  <li>Elettricity
    <ul>
      <li><a href="elec.php">Electricity 1</a></li>
      <li><a href="iron-stand.php">Soldering iron stand</a></li>
    </ul>
  </li>
  <li>Woodwork
    <ul>
      <li><a href="furniture.php">Furniture</a></li>
      <li><a href="small-wood.php">Small things made of wood</a></li>
    </ul>
  </li>
  <li>Web development
    <ul>
      <li><a href="website-planning.php">Planning this website</a></li>
      <li><a href="svg-support.php">SVG support test</a></li>
    </ul>
  </li>
  <li>Metalwork
    <ul>
      <li><a href="router-stand.php">Network router stand</a></li>
      <li><a href="rings.php">Unpolished rings</a></li>
    </ul>
  </li>
  <li>Drawings
    <ul>
      <li><a href="appartamento.php">A simple plan of a flat</a></li>
    </ul>
  </li>
  <li>Other stuff
    <ul>
      <li><a href="book-binding.php">Book binding</a></li>
      <li><a href="polyhedron.php">Polyhedrons made of paper and other materials</a></li>
      <li><a href="computer-stuff.php">Computer-related contraptions</a></li>
      <li><a href="log-2013.php">2013 activities</a></li>
      <li><a href="pascal.php">Pascal programming</a></li>
    </ul>
  </li>
</ul>
EN_CONTENT;

$it_content = <<< IT_CONTENT
  <h1>Attivitá di Fai Da Te</h1>
  <ul>
      <li>Elettricità
        <ul>
          <li><a href="elec.php">Elettricità 1</a></li>
          <li><a href="iron-stand.php">Supporto per saldatore</a></li>
        </ul>
      </li>
      <li>Lavori in legno
        <ul>
          <li><a href="furniture.php">Mobili</a></li>
          <li><a href="small-wood.php">Piccole cose di legno</a></li>
        </ul>
      </li>
      <li>Progetti WWW
        <ul>
          <li><a href="website-planning.php">A proposito di questo sito</a></li>
          <li><a href="svg-support.php">Controllare se funziona SVG</a></li>
        </ul>
      </li>
      <li>Lavori in metallo
        <ul>
          <li><a href="router-stand.php">Supporto per router di rete</a></li>
          <li><a href="rings.php">Anelli grezzi</a></li>
        </ul>
      </li>
      <li>Disegni
        <ul>
          <li><a href="appartamento.php">Una semplice planimetria di appartamento</a></li>
        </ul>
      </li>
      <li>Altro
        <ul>
          <li><a href="book-binding.php">Rilegatura</a></li>
          <li><a href="polyhedron.php">Poliedri di cartone e d'altri materiali</a></li>
          <li><a href="computer-stuff.php">Aggeggi intorno al computer</a></li>
          <li><a href="log-2013.php">Attività 2013</a></li>
          <li><a href="pascal.php">Programmazione in Pascal</a></li>
        </ul>
      </li>
  </ul>
IT_CONTENT;

require_once("template.php");
?>
