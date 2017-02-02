<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$it_title = "Breve lezione per usare GNU/Linux.";
$en_title = $it_title;
$it_content = <<< IT_CONTENT
<h1>Breve lezione su GNU/Linux</h1>
<p>Stefano Carlesso</p>
<time >2012-03-15</time>
  <h2>Scopo</h2>
    <p>Insegnare a usare GNU/Linux (livello minimo).</p>
  <h2>Premessa</h2>
    <p>Non è perfetto. Però ha molte ottime caratteristiche.</p>
    <p>Il concetto di software libero/open source.</p>
  <h2>Componenti</h2>
    <p>Un computer è composto di hardware e software.</p>
    <p>Il software è principalmente</p>
    <ul>
      <li>BIOS</li>
      <li>bootloader</li>
      <li>sistema operativo (s.o.)</li>
      <li>programmi applicativi (Firefox, Openoffice...)</li>
      <li>dati (testi, immagini, manuali utente...)</li>
    </ul>
    <p> A sua volta il s.o. è composto da diversi componenti, tra cui</p>
    <ul>
      <li>kernel</li>
      <li>gestore di filesystem</li>
      <li>drivers</li>
      <li>interfacce utente</li>
    </ul>
    <p>I componenti hardware comunicano fra loro.</p>
    <p>L'hardware comunica col software.</p>
    <p>I componenti software comunicano fra loro.</p>
    <p>Il kernel gestisce le risorse hardware e le rende disponibili per gli strati di software soprastanti e per l'utente.</p>
    <p> Un sistema GNU/Linux nasce dall'assemblaggio di diversi componenti
    distinte: il kernel Linux, il software GNU e altro. Esiste una grande
    varietà di sistemi GNU/Linux, dovuta alla possibilità di modificare e
    sostituire i vari componenti. Queste varietà sono dette <em>distribuzioni</em>.
    Noi utilizzeremo la distribuzione Xubuntu. Essa è derivata dalla
    distribuzione Ubuntu, da cui differisce solo per l'interfaccia grafica.
    La maggior parte delle informazioni disponibili su internet riguardo a
    Ubuntu sono valide anche per Xubuntu.</p>
  <h2>Utenti</h2>
    <p> Linux è un sistema multiutente, cioè è stato progettato per permettere
    a più utenti di usare lo stesso computer. Si possono dividere gli
    utenti in tre categorie.</p>
    <ul>
      <li>Utenti normali, che hanno accesso alle cartelle e ai programmi che servono a svolgere il proprio lavoro.</li>
      <li>Amministratori, che possono installare e disinstallare software ed eseguire manutenzione e impostazioni avanzate.</li>
      <li>utente <strong>root</strong> che ha potere di vita e di morte su ogni aspetto del sistema operativo.</li>
    </ul>
  <h2>File e cartelle</h2>
    <p>In un sistema Linux le cartelle seguono una precisa gerarchia. Mentre
    in Windows ogni disco viene chiamato con una lettera, per esempio "<strong>C:</strong>",
    in Linux le cose sono diverse. Può essere utile una figura (semplificata).</p>
  <figure><img  src="img/filesystem-hierarchy.png" alt="struttura filesystem linux"/></figure>
  <p>Questa figura può ricordare un albero, e ci riferiremo ad essa come all'<em>albero delle directory</em>. </p>
  <p>C'è una cartella che contiene tutte le altre e che si chiama <em>root</em>, cioè radice, e si scrive col simbolo dello slash <strong>/</strong>.</p>
  <p>Il separatore delle cartelle è sempre slash, <strong>/</strong>.</p>
  <p>La cartella "<strong>/home</strong>" contiene una cartella per ogni utente. Per
  esempio Antonio ha una cartella "<strong>/home/antonio</strong>". Normalmente ci
  si riferisce ad essa come alla <em>cartella home di Antonio</em>. Spesso è
  indicata col simbolo tilde "<strong>~</strong>", per esempio <strong>~/foto</strong> è
  equivalente a <strong>/home/antonio/foto</strong>.</p>
  <p>La cartella <strong>/bin</strong> contiene i file eseguibili di molti programmi.</p>
  <p>Ci sono molte altre cartelle, ma la loro conoscenza esula dai nostri scopi.</p>
  <h3>Nomi</h3>
  <p>Per i nomi dei file, si possono usare:</p>
  <ul>
    <li>lettere maiuscole e minuscole,</li>
    <li>numeri,</li>
    <li>underscore "<strong>_</strong>", trattino "<strong>-</strong>" e punto "<strong>.</strong>"</li>
  </ul>
  <p> Anche se utilizzabili, sconsiglio gli spazi, i caratteri accentati, i simboli, le lettere greche e cirilliche.</p>
  <h3>Il concetto di montaggio</h3>
      <p> Dischi rigidi, cd e chiavette usb, per essere letti e scritti, devono
  essere attaccati all'albero delle directory. In gergo si dice
  "montati". Per esempio il cdrom viene montato nella cartella "<strong>/media/cdrom</strong>".
  Quando inseriamo una chiavetta usb nella presa, possiamo montarla in "<strong>/media/usbdrive</strong>".
  In questo modo possiamo leggere e scrivere file su di essa. Prima di
  rimuoverla fisicamente dobbiamo smontarla, se no rischiamo di rovinare
  i dati.</p>


  <h2>L'interfaccia grafica</h2>
  <p>
  Il mio consiglio è di utilizzare l'interfaccia grafica XFCE. Trovo che sia
  funzionale e che consumi relativamente poche risorse. Inoltre è facilmente
  personalizzabile.</p>
  <p>Qui l'ho modificata per renderla simile a Windows XP. Ha:</p>
  <ul>
    <li>Una barra delle applicazioni</li>
    <li>Un menù principale</li>
    <li>Area di notifica</li>
    <li>Un desktop</li>
    <li>Finestre</li>
    <li>Icone</li>
  <p>Nel menù principale troviamo</p>
  <ul>
    <li>Le applicazioni divise per categoria.</li>
    <li>Il comando "<strong>Esci</strong>" per spegnere o riavviare il computer o per uscire dall'account utente. </li>
    <li>Il sottomenu "<strong>Impostazioni</strong>", ovvero le impostazioni dell'interfaccia grafica (liberamente modificabili senza paura di rompere qualcosa).</li>
    <li>Il sottomenù "<strong>Sistema</strong>" con le impostazioni e i comandi di sistema (richiede di essere amministratore).</li>
  </ul>
  <p>Proviamo a vedere alcuni programmi</p>
      <p>Il gestore di file è l'equivalente di "Esplora risorse" di Windows.</p>
      <p> "Gedit" è un editor di testo, simile a "Blocco note" ma molto più potente.</p>
      <p>Il gestore di alimentazione.</p>
      <p>Il gestore di rete.</p>
      <p>Il montaggio di una chiavetta.</p>

  <h2>Installazione di una applicazione</h2>
  <p>
  In Windows quando abbiamo bisogno di una nuova applicazione di solito
  navighiamo sul Web e scarichiamo un file installante, di solito "<strong>.exe</strong>".
  Poi lo controlliamo con un antivirus. Se è pulito, facciamo doppio
  click su di esso e parte la procedura di installazione.
  </p>
  <p>
  In Linux i file di installazione sono nella forma di "<strong>pacchetti</strong>".
  In molti casi i pacchetti di cui abbiamo bisogno si trova in in un
  catalogo online apposito, già controllati e pronti. Questo catalogo
  contiene solo applicazioni compatibili con la nostra varietà e versione
  di Linux. </p>
  <p>
  Usiamo il "Gestore di pacchetti", che ci permette di cercare
  l'applicazione nel catalogo e di installarla. </p>
  <h2>Possibili problemi di usare GNU/Linux</h2>
  <ul>
    <li>Non tutto l'hardware è compatibile perché i produttori non
    rilasciano le specifiche dei loro prodotti. Prima di acquistare un
    prodotto bisogna assicurarsi che sia compatibile. </li>
    <li>Spesso non sono disponibili gli "stessi" programmi per Windows e
    Linux. Bisogna quindi usarne di equivalenti. Per esempio non c'è
    Microsoft Office, però c'è Open Office e GNU Office. Non c'è AutoCAD,
    ma c'è qCAD, VariCAD e BricsCAD. Non ci sono la quantità di giochi per
    Windows, ma ce ne sono comunque un certo numero. Se si è costretti ad
    usare un certo programma disponibile solo per Windows, si può:
          <ul>
            <li>Installare sullo stesso computer sia Linux che Windows. Però
            questo richiede di riavviare il computer ogni volta che bisogna usare
            quel programma. </li>
            <li>Installare in Linux un emulatore di Windows e usarlo per far
            girare il programma in questione. Non sempre fattibile. </li>
            <li>Installare in Linux un computer virtuale, installarci Windows
            e farci girare il programma in questione. Consuma risorse. </li>
          </ul>
    </li>
    <li>Per alcuni aspetti usare Windows o Linux è molto simile, per
    altre cose è differente. Sta all'utente valutare se Linux va bene per
    lui. Imparare come usare Linux richiede una certa dose di fatica (come
    d'altra parte imparare ad usare una nuova versione di Windows). Secondo
    me però è una fatica ripagata, soprattutto perché l'accento è su "agire
    capendo" piuttosto che "agire perché si fa così". </li>
  </ul>

  <h2>Vantaggi di usare GNU/Linux rispetto a Windows</h2>
  <ul>
    <li>Maggiore sicurezza a tutti i livelli.
        <ul>
          <li>Problema dei virus praticamente inesistente. </li>
          <li>Minori bug. Un software open source è sottoposto a peer
          review da parte della comunità dei programmatori, quindi è più
          probabile che gli inevitabili errori di programmazione siano scoperti e
          risolti in tempo utile. </li>
          <li>Presenza di un sistema avanzato di permessi dei file e
          cartelle, per cui utenti diversi avranno accesso solo ad alcune
          cartelle e non altre. </li>
          <li>Solo l'amministratore può installare applicazioni ed eseguire
          comandi potenzialmente pericolosi. </li>
        </ul>
    </li>
    <li>Maggiore efficacia.
      <ul>
        <li>Non è necessario deframmentare periodicamente il disco fisso.
        </li>
        <li>Maggiore stabilità (tempo medio tra i guasti). Rari i blocchi
  di sistema (schermate blu) e le necessità di riavviare il computer. </li>
        <li>Maggiore durevolezza del sistema operativo, non è necessario
  formattare e reinstallare tutto di frequente. </li>
      </ul>
    </li>
    <li>Risparmio.
      <ul>
        <li>Il software è gratuito, nella maggior parte dei casi. </li>
        <li>Uso più efficiente delle risorse hardware: memoria RAM,
  processore, disco fisso, corrente elettrica. In molti casi si può usare
  un computer vecchio e fare lo stesso lavoro. </li>
        <li>Grande disponibilità di documentazione sul web, gratuita e
  spesso di buon livello. Manuali, Wiki, how-to, forum di utenti, chat.
  Ciò non toglie che spesso sia utile un buon libro stampato. </li>
      </ul>
    </li>
    <li>Migliore controllo del computer.
      <ul>
        <li>Possibilità di capire come funzionano molte cose, grazie al
  fatto che il codice è open source, e che le impostazioni del computer
  sono scritte su file di testo, leggibili dagli umani, e non file
  binari, incomprensibili. </li>
        <li>Siamo noi umani a comandare, non il computer a funzionare
  quando vuole lui secondo una logica imperscrutabile. </li>
        <li>Possilità di personalizzare molti aspetti del computer, per
  esempio l'interfaccia grafica, per adattarsi alle nostre necessità o
  preferenze. </li>
        <li>Facilità di automazione di compiti noiosi o ripetitivi. </li>
      </ul>
    </li>
    <li>Minore stress nell'uso del computer dovuto alle minori
  preoccupazioni su sicurezza, stabilità, manutenzione, comportamento
  arbitrario.
    </li>
  </ul>
IT_CONTENT;
$en_content = $it_content;
require_once("template.php");
?>




