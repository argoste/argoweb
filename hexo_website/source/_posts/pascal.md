---
title: Un esempio di Pascal
date: 2010-02-14
tags:
  - development
lang: it
---
<p>Pascal è un linguaggio di programmazione creato Niklaus Wirth,
Professore universitario di informatica, per insegnare la programmazione.
Si tratta di un linguaggio adatto ai principianti, ma con regole severe
che incoraggiano l'analisi del problema che si vuole risolvere.</p>
<p>Ho scritto un piccolo programma di statistica descrittiva.</p>
<p>Per illustrare un algoritmo sui può usare un diagramma di flusso o
flowchart. Di seguito alcuni simboli che si possono usare.</p>
<p><img src="legenda.png" border="1" alt="legenda"></p>
<p>Questo è il diagramma di flusso dell'algoritmo per trovare la frequenza
assoluta n[i] di un campione x[i].</p>
<p><img src="frequenza.png" border="1" alt="diagramma di flusso"></p>
<p>Uno spezzone di codice Pascal. (Da rivedere, non bisogna abusare dell'istruzione GOTO)</p>

<pre>
  //frequenze di x[i] da 1 a N
  i:=1;
  goto L1;

  L1:
  begin
    a:=1;
    goto L2;
  end;

  L2:
  begin
    if x[i]=x[i+a] then
      begin
        a:=a+1;
        goto L2;
      end
    else
      begin
        n_i[i]:=a;
        if a=1 then
          goto L4
        else
          begin
            b:=1;
            goto L3;
          end;
      end;
  end;

  L3:
  begin
    n_i[i+b]:=a;
    if b=a-1 then
      begin
        i:=i+b;
        goto L4;
      end
    else
      begin
        b:=b+1;
        goto L3;
      end;
  end;

  L4:
  begin
    if i<>N then
      begin
        i:=i+1;
        goto L1;
      end
  end;
</pre>

<p>L'<a href="pascal.zip">archivio compresso</a> contiene Il codice sorgente, il manuale e alcuni dataset di esempio</p>
<p><a href="statistica-0.11.zip">statistica-0.11.zip</a></p>

<p>Alcuni linguaggi più moderni sono derivati da Pascal. Delphi, Objective Pascal (e Free Pascal) introducono
la programmazione a oggetti, che non conosco. La sintassi di Ada ne è influenzata.</p>
