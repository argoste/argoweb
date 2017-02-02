<?php
require_once("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "About me";
$it_title = "Qualcosa su di me";
$en_content = <<< EN_CONTENT
<p>I'm Stefano. I live in Milan, Italy, and I do maintenance in houses.</p>
<p>I'm building this site mainly for three purposes.</p>
<ul>
  <li>To learn, by doing,  some communication, organization, computing.</li>
  <li>A portfolio of my skills in craft.</li>
  <li>A way of publishing some written material about various subjects.</li>
</ul>
<p>You can contact me by <a href="maito:stefano.carlesso@yahoo.it>email</a>"</p>
EN_CONTENT;
$it_content = <<< IT_CONTENT
<p>Mi chiamo Stefano. Abito a Milano e faccio manutenzione nelle abitazioni.</p>
<p>Realizzo questo sito principalmente per tre scopi</p>
<ul>
  <li>Per imparare, facendo,  qualcosa di comunicazione, organizzazione, informatica.</li>
  <li>Per mostrare alcune cose realizzate.</li>
  <li>Per pubblicare qualche pensiero su argomenti vari.</li>
</ul>
<p>Sono contattabile tramite <a href="maito:stefano.carlesso@yahoo.it">email</a></p>
IT_CONTENT;
require_once("template.php");
?>
