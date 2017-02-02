<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$it_title = "La privacy, oggi";
$en_title = $it_title;
$it_content = <<< IT_CONTENT
<h1>La privacy, oggi</h1>
<p>Stefano Carlesso <time >23-01-2012</time></p>
<p>
Una cosa che noto in sistemi informatici di moda oggi è il rischio per la
privacy dell'utente. I social network, gli smartphone e il cloud computing
sono nuovi modi di usare tecnologie informatiche e sono interessanti.
Pongono però tutti problemi di privacy e di furto dei dati.
</p>
<p>
Si sente spesso al telegiornale di qualcuno che ha commesso o è stato
vittima di un reato, il cui account di Facebook o Twitter viene esaminato
dagli inquirenti. In questo caso è giusto che ciò avvenga, ma se è così
facile entrare in un account di social network, anche malintenzionati
possono farlo.
</p>
<p>
Il cloud computing ha degli evidenti vantaggi. Ha anche degli svantaggi, di cui
parlerò in un altro articolo. Il problema per la privacy si pone perché i miei
dati, i file che creo, le mie foto sono tutti in località remota. Prima di
affidarli a qualcuno devo essere sicuro dell'onestà dell'azienda che mi offre il
servizio, in modo che non vengano usati per causarmi danno.
Gli smartphone Android sono pensati per un costante collegamento alla
rete: le applicazioni caricano e scaricano continuamente informazioni, e i
servizi web sono particolarmente importanti per questi dispositivi. Ne
deriva che qualunque cosa faccio col mio smartphone viene registrata da
server remoti. Qualche tempo fa sia Google che Apple furono accusati di
usare in modo illecito i dati degli utenti.
</p>
<p>
Non dico che non bisogna usare questi nuovi dispositivi e servizi, ma
affermo che dipende dal come vengono usati, che possono portare maggior
vantaggio e a minor rischio per gli utenti.
</p>
IT_CONTENT;
$en_content = $it_content;
require_once("template.php");
?>





