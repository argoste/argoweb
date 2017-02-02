<?php
require_once("common-functions.php");
$author = "Stefano Carlesso";
$it_title = "Una semplice planimetria di appartamento";
$en_title = $it_title;

$it_content = <<< IT_CONTENT
<h1>Planimetria di appartamento</h1>
<figure>
<figcaption>
<p><time >gennaio 2012 </time></p>
<p>Questa planimetria di appartamento arredato è pensata per essere stampata su carta A4, la scala è 1:40.</p>
<p>Non é un appartamento effettivamente esistente. L'ho disegnata per sovrapporci uno schema planimetrico
di impianto elettrico.</p>
<p>Il file, in formato Drawing Exchange Format, é liberamente scaricabile e utilizzabile.
<a href="img/appartamento-arredato.dxf">appartamento-arredato.dxf</a> [download].</p>
</figcaption>
  <embed src="img/appartamento-arredato.svg" alt="planimetria">
</figure>
IT_CONTENT;

$en_content = $it_content;

require_once("template.php");
?>
