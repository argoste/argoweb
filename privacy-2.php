<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$it_title = "Privacy II: consigli";
$en_title = $it_title;
$it_content = <<< IT_CONTENT
   <h1>Privacy II: consigli</h1>
    <p>Stefano Carlesso</p>
    <time >2012-05-08</time>
    <p>Alcune ricette per salvaguardare i nostri dati sul web.</p>
    <p>Usare un Web Browser Open Source, tipo Firefox, Links2, Dillo, Midori, Konqueror...</p>
    <p>Installare <a href="http://www.ghostery.com/">Ghostery</a>, componente aggiuntivo per Firefox. Esso impedisce il
    furto di dati bloccando programmini malevoli inseriti in vari siti.</p>
    <p>Installare <a href="https://www.eff.org/https-everywhere">Https everywhere</a>, componente aggiuntivo per Firefox.
    Esso rende automatica la comunicazione cifrata con i siti che la supportano.</p>
    <p>Parlando di motori di ricerca, uno che sembra più rispettoso della privacy è <a href="duckduckgo.com">duckduckgo</a>.
    Magari non è al livello di Google, però puo essere utile (anche perché non mi piace dipendere da un solo motore di
    ricerca, è una questione di libertà).</p>
    <div><a href="https://duckduckgo.com"><img src="https://duckduckgo.com/assets/badges/antipixel.gif" alt="DuckDuckGo" border="0" /></a>
    </div>
IT_CONTENT;
$en_content = $it_content;
require_once("template.php");
?>
