<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$it_title = "Geni e ambiente";
$en_title = $it_title;
$it_content = <<< IT_CONTENT
    <h1>Geni e ambiente</h1>
    <p>Stefano Carlesso</p>
    <time >2012-05-07</time>
    <p>
    Un modo superficiale di fare informazione attribuisce alla genetica la capacità di spiegare tutte le caratteristiche e
    i comportamenti di un essere vivente: «trovato il gene dell'innamoramento», «trovato il gene della matematica».
    </p>
    <p>
    Che il fenotipo (le caratteristiche del corpo di un vivente) dipendano dal genotipo (le informazioni contenute in
    particolari strutture che vengono trasmesse dai genitori ai figli) è fuori di dubbio. Ma non dimentichiamo che c'è anche
    l'interazione con l'ambiente in cui l'organismo vive. Un vivente si trova in certe condizioni fisiche, interagisce con
    altri organismi, gli capitano delle cose.
    </p>
    <p>
    Il fatto che esistano predisposizioni innate a certe attività, rischia di giustificare il non impegnarsi nello studio e
    nell'esercizio. Chiunque può imparare un certo livello di matematica e statistica, se vuole e se gliene viene data l'opportunità.
    </p>
    <p>
    Ormai è diffuso la seguente espressione: «questo comportamento non è nel mio DNA». Spesso usato a sproposito, come a
    negare l'influenza della vita che ho vissuto sul mio modo di essere.
    </p>
IT_CONTENT;
$en_content = $it_content;
require_once("template.php");
?>
