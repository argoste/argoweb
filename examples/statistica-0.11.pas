program stat_descr1;
    {charset=UTF-8}
    {author: argo3@altervista.org}
    {STATISTICHE DESCRITTIVE SU UN CAMPIONE DI DATI NUMERICI}
    {this software is freely available under GNU GPL}
    {NOTE: sono supportati numeri solo fino ad una certa cifra}

uses crt;               //la libreria standard, ci serve per il comando clrscr

var filetxt: text;      //file contenente una osservazione (x) per riga
    filename: string;   //niente spazi per favore
    row: real;       //le x sono variabili numeriche
    x: array[1..999] of real; //le nostre osservazioni x
    N: integer;                   //numero di righe ossia di osservazioni x
    i: integer;                   //indice delle osservazioni x_i
    j: integer;     //un altro indice che ci serve per ordinare le x
    temp: real;     //una variabile temporanea per ordinare le x
    sum_x: real;      //somma delle osservazioni x
    media: real;    //media del campione x_medio 
    varianza: real; //del campione, detta anche s^2 
    ss: real;       //sum of squares, è il numeratore della varianza
    n_i: array[1..999] of integer;   //frequenza assoluta
    a,b: integer;   //contatori
    sum_n_i: integer;
    label L1,L2,L3,L4;   //a part of code you can jump to using 'goto'


begin
    clrscr; //pulisce lo schermo
    //Dati di imput
    writeln('scrivi il nome del file completo di percorso');
    readln(filename);
    assign(filetxt, filename);   
    reset(filetxt);       {it means open the file}
   
    //con questo ciclo (struttura iterativa) otteniamo n
    N:=0;  {si dice inizializzare la variabile}
    repeat {iterazione con condizione finale}
        begin
        readln(filetxt,row);
        N:= N+1;
        end;
    until eof(filetxt);

    //con questo ciclo otteniamo sum_x
    reset(filetxt);
    sum_x:=0; 
    repeat 
        begin               
            readln(filetxt,row);
            sum_x:= sum_x + row;
        end;
    until eof(filetxt);

  //con questo ciclo riempiamo l'array
  reset(filetxt);
  for i:=1 to N do {struttura iterativa con contatore}
      begin
          readln(filetxt,row);
          x[i]:= row;     
      end;
    
  //ordiniamo l'array (Bubble sorting method, simple and slow)
  for i:= 1 to N-1 do
    for j:= i + 1 to N do
      begin
        if (x[i] > x[j]) then {questa è una struttura di selezione binaria}
          begin
            temp:= x[i];
            x[i]:= x[j];
            x[j]:= temp;
          end;
      end;

  //media e varianza
  media:= sum_x /N;
  ss:= 0;
  for i:= 1 to N do
      begin
          ss:= ss + x[i] - media ;
      end;
  varianza:= ss/(N-1);

    
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

//    writeln('Dati ordinati senza i valori ripetuti');
//    writeln(' i                      x','    n_i');
//        for i:=1 to N do
//            begin
//                if n_i[i] = 1 then
//                writeln(i:3,'  ',x[i]:20:3,'    ',n_i[i]) else
//                begin
//                a:=
//                writeln(i:3,'  ',x[i]:20:3,'    ',n_i[i]);
//                end;
//            end;



  //un piccolo controllo
  sum_n_i:=0;
  for i:=1 to n do    
    begin
    sum_n_i:=sum_n_i + n_i[i];
    end;
    
  //stampiamo sullo schermo i risultati
  writeln('');
  writeln('Dati ordinati');
  writeln(' i                      x','    n_i'); 
  for i:=1 to N do
    begin
    writeln(i:3,'  ',x[i]:20:3,'    ',n_i[i]);
    end;
  writeln;
  writeln('il numero di osservazioni è N= ',N);
  writeln('la somma delle osservazioni è sum(x)= ',sum_x:20:3); 
  writeln('la media è x_medio= ',media:20:3);
  writeln('la varianza è s^2= ',varianza);
  if ( sum_n_i= N ) then 
    writeln('sum(n_i)=N') else
    writeln('sum(n_i) >< N');

  close(filetxt); 

end.
