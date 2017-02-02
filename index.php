<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "argoste homepage";
$it_title = "homepage di argoste";
$en_content = <<< EN_CONTENT
<p>Welcome!</p>
<p>The new stuff: <a href="http://www.lateriz.altervista.org">Lateriz project</a> [external link].</p>
<p>My blog: <a href="blog/">Public diary</a> [in Italian].</p>
EN_CONTENT;
$it_content = <<< IT_CONTENT
<p>Benvenuti!</p>
<p>Novitá: <a href="http://www.lateriz.altervista.org">Progetto Lateriz [in Inglese, link esterno]</a>.</p>
<p>Il mio blog, <a href="blog/">Diario Pubblico</a>.</p>
IT_CONTENT;
require_once("template.php");
?>
