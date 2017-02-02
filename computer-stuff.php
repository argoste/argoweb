<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Computer-related contraptions";
$it_title = "Aggeggi intorno al computer";

$it_content = <<< IT_CONTENT
<h1>Aggeggi intorno al computer</h1>
<section>
  <h3>Generatore casuale di caratteri</h3>
  <p>I generatori software di numeri non sono realmente casuali, mentre quelli hardware lo possono essere.</p>
  <p>Funziona come una roulette: la fai girare e quando si ferma, leggi il numero o la lettera corrispondente alla freccia (che è una grossa vite)</p>
  <img src="img/ruota_fortuna.jpg"  alt="roulette" />
</section>
<section>
  <h3>Modifica di una tastiera</h3>
  <p>Avete mai avuto la necessità di trasformare una tastiera italiana in una statunitense? Avevo una tastiera qwerty con mappatura (layout) italiana e volevo usare quella statunitense qwerty. L'hardware è praticamente lo stesso
  <sup>1</sup> tranne che per i simboli stampati su alcuni tasti. Si può impostare il sistema operativo per usare la mappatura desiderata.</p>
    <figure>
    <figcaption></figcaption>
    <img src="img/keyboard-mod01.jpg" alt="tastiera modificata" />
  </figure>
  <p>La mappatura statunitense va molto bene per scrivere codice, in particolare HTML, e permette di inserire gli accenti corretti per l'Italiano
  usando il semplice metodo delle <em>dead keys</em> (una classe di tasti modificatori)<sup>2</sup>.
  La mappatura italiana non ha tutte le necessarie lettere accentate. </p>
    <p>Si tratta di grattare alcuni tasti con carta vetrata fine per eliminare i simboli stampati sopra e poi di scriverci il nuovo simbolo con
  il correttore (<em>bianchetto</em>) o, meglio,  con un pennarello.</p>
  <h4>Note</h4>
  <p>[1] La tastiera italiana inoltre ha un tasto in più.</p>
  <p>[2] Mi trovo bene con le dead keys attivate da AltGr.</p>
</section>
IT_CONTENT;

$en_content = <<< EN_CONTENT
<h1>Computer-related contraptions</h1>
<section>
  <h3>Random character generator</h3>
  <p>You may know that software number generator are not truly random, but hardware ones can be.</p>
  <p>It works like a roulette: you spin it, and when it stops, you read the number or letter corresponding to the arrow (which is a big screw)</p>
  <img src="img/ruota_fortuna.jpg"  alt="roulette" />
</section>
<section>
  <h3>Keyboard mod</h3>
  <p>Have you ever had the need to turn an italian keyboard into an us keyboard? I had a qwerty keyboard with italian layout and I wanted to use us qwerty layout. The hardware is basically the same<sup>1</sup>,
  except for the symbols printed on some of the keys.  You can set your operating system to use the layout you want.</p>
    <figure>
    <figcaption></figcaption>
    <img src="img/keyboard-mod01.jpg" alt="modified keyboard" />
  </figure>
  <p>The us layout is good for writing code, expecially HTML, and let you insert the correct accents for Italian language
  using the simple dead keys method<sup>2</sup>. The it layout simply don't have all the necessary accented letters.</p>
    <p>Use some fine-grained sandpaper over the key to remove the symbol printed on it, then write the new symbol with correction fluid, or, better, with
    a felt-tip pen.></p>
  <h4>Notes</h4>
  <p>[1] Italian keyboard also has one more key.</p>
  <p>[2] I prefer dead keys activated with AltGr.</p>
</section>
EN_CONTENT;
require_once("template.php");
?>


