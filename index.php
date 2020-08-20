<?php
session_start();
$_SESSION["a"]='class="g"';
$_SESSION["b"]="";
$_SESSION["c"]="";
$_SESSION["d"]="";
require("config.php");
$html.='

  <div class="container" id="cont">
    <h1 class="stileTitolo">Portfolio Marco Todaro </h1>
    <hr></hr>

    <div class="bottone">
      <a href="att.php">
  Esplora
  </a>
    </div>

    <div class="text-center container-fluid" id="header2">
      <h1 class="titoloCentrato stileTitolo">Progetto Walk to Work</h1>
      <div class="text-center container-fluid" id="header21">
        <div class="clearfix" id="pp">
          <img src="img/progetto.jpg" class="right immagine img-responsive" alt="ASL"> Il percorso dalla terza alla quinta superiore, indirizzo informatico, nella scuola <a href="https://www.pascal.gov.it/">Blaise Pascal</a> di Reggio Emilia, è identificato
          in un progetto chiamato "Walk to work", in collaborazione con <a href="http://www.impacthubre.it"> Impact Hub</a>, una rete internazionale di spazi e persone dove imprenditori, creativi e professionisti possono accedere a risorse, lasciarsi
          ispirare dal lavoro di altri, sviluppare idee innovative e potenziare relazioni utili, individuando nuove opportunità di mercato. Inoltre, questo progetto non sarebbe stato possibile se le aziende non avessero dato il loro contributo,
          quindi un sentito ringraziamento va anche a loro e ai dipendenti.
        </div>
      </div>
    </div>
    <br><br>
    <div class="corpo text-center container-fluid">
      <h1 class="titoloCentrato stileTitolo">Alternanza Scuola lavoro</h1>
      <div class="corpo1 text-center container-fluid">
        <div class="clearfix">
          <img src="img/sfondoo.jpg" class="left immagine img-responsive" alt="università di reggio">
          <h2>l\' ASL nel nostro indirizzo</h2>
          <p>Benvenuti nel mio sito, io sono Marco Todaro e ora vi spiegherò il mio percorso di alternanza. </p>

          <p>L\'alternanza è un\'esperienza formativa innovativa per unire sapere e saper fare, orientare le aspirazioni degli studenti e aprire didattica e apprendimento al mondo esterno. Perché l\'unica risposta strutturale alla disoccupazione è una scuola
            collegata con il mondo del lavoro.</p>
          <img src="img/alternanzascuolalavoro.jpg" class="right immagine img-responsive" alt="ASL">
          <h3><b>Una nuova modalità di collegamento della scuola con il lavoro</b></h3>
          <p>
            L\'alternanza scuola-lavoro consiste nella realizzazione di percorsi progettati, attuati, verificati e valutati, sotto la responsabilità dell\'istituzione scolastica, sulla base di apposite convenzioni con le imprese, o con le rispettive associazioni di
            rappresentanza, o con le camere di commercio, industria, artigianato e agricoltura, o con gli enti pubblici e privati, ivi inclusi quelli del terzo settore, disponibili ad accogliere gli studenti per periodi di apprendimento in situazione
            lavorativa, che non costituiscono rapporto individuale di lavoro art.4 D.Lgs. 15 aprile 2005, n. 77. In questi due anni, "l\'associazione" che ci ha seguito durante tutto il nostro percorso è stata l\'Impact-Hub con il progetto walk to work
            e vari eventi che puoi trovare, approfonditi nel <a href="att.php">menù attività</a>.
          </p>
          <h2 class="h2">Cos \' è l\' ASL ?</h2>
          <div class="descr"> descritto dal sito ufficiale dell\'istruzione </div>

          <p>L\'alternanza scuola-lavoro, obbligatoria per tutti gli studenti dell\'ultimo triennio delle scuole superiori, anche nei licei, è una delle innovazioni più significative della legge 107 del 2015 (La Buona Scuola) in linea con il principio della
            scuola aperta. La scuola deve, infatti, diventare la più efficace politica strutturale a favore della crescita e della formazione di nuove competenze, contro la disoccupazione e il disallineamento tra domanda e offerta nel mercato del lavoro.
            Per questo, deve aprirsi al territorio, chiedendo alla società di rendere tutti gli studenti protagonisti consapevoli delle scelte per il proprio futuro.</p>

          <p><img src="img/titolo_alternanza2.jpg" class="left immagine img-responsive" alt="ASL"> Con l\'alternanza scuola-lavoro, viene introdotto in maniera universale un metodo didattico e di apprendimento sintonizzato con le esigenze del mondo esterno
            che chiama in causa anche gli adulti, nel loro ruolo di tutor interni (docenti) e tutor esterni (referenti della realtà ospitante). L\'alternanza favorisce la comunicazione intergenerazionale, pone le basi per uno scambio di esperienze e crescita
            reciproca. Non solo imprese e aziende, ma anche associazioni sportive e di volontariato, enti culturali, istituzioni e ordini professionali possono diventare partner educativi della scuola per sviluppare in sinergia esperienze coerenti alle
            attitudini e alle passioni di ogni ragazza e di ogni ragazzo. In questa chiave si spiega il monte ore obbligatorio: 400 ore negli istituti tecnici e professionali e 200 ore nei licei che rappresentano un innovativo format didattico rispetto
            alle tradizionali attività scolastiche e possono essere svolte anche durante la sospensione delle attività didattiche e/o all\'estero.</p> ';

print($html.$footer);
?>
