<?php
session_start();

$_SESSION["a"]="";
$_SESSION["b"]='class="g"';
$_SESSION["c"]="";
$_SESSION["d"]="";
require("config.php");
$html.='


<div class="container" id="cont">
    <h1>Alternanza Scuola Lavoro</h1>
    <hr></hr>

    <br><br>
    <div class="corpo text-center container-fluid">
      <h1 class="titoloCentrato">Chi Sono ?</h1>
      <div class="corpo1 text-center container-fluid">
        <div class="clearfix">
          <br>
          <img src="img/marcoprof.jpg" class="right immagine img-responsive" alt="foto profilo mia">
          <h2>Mi presento ...</h2>
          <p>Benvenuti nel mio sito, io sono Marco Todaro, uno studente della scuola <a href="https://www.pascal.gov.it/">"Blaise Pascal"</a> di Reggio Emilia e frequento l\'indirizzo informatico.</p>
          <br>
          <p>Noi studenti abbiamo realizzato un sito per riassumere e spiegare le nostre attività di alternanza scuola-lavoro. Le ore previste nella nostra scuola (nel triennio) sono 400 e sono divise in tutto l\'arco dei tre anni scolastici. Le attività
            di alternanza ci hanno fatto imparare molte cose, che ci saranno molto utili quando entreremo nel mondo del lavoro.
          </p>
          <br><br>
          <div class="clearer"></div>
          <h3>Perchè ho scelto il Bus ?</h3>
          <p>
            Come ho già detto, mi chiamo Marco Todaro e ho scelto di frequentare questa scuola perchè mi sembra una buona opzione e, pensando al mio futuro, mi vedo bene nei "panni" di un informatico. In questi anni a scuola
            ho imparato moltissime cose sulla programmazione in Pascal, C++, Java, Arduino, Assembly, Html, Css, Javascript, JQuery, Python, PHP, MySQL e altri linguaggi, oltre ad avere appreso l\'utilizzo di programmi come Photoshop, Excel, Word e simultori come Multisim
            LabView e circuits.io .
          </p>
          <img src="img/informatica.jpg" class="centro immagine img-responsive" alt="informatico">
          <br><br>
          <div class="clearer"></div>
          <h3>Attivita extra scolastiche</h3>
          <p>
            Ho giocato per più di 10 anni a <b> pallacanestro</b>, vado in palestra e mi piace moltissimo giocare a tennis e a pallavolo. Forse una delle mie più grandi passioni è lo <b>snowboard</b>, ormai da 5
            anni lo pratico in Trentino e in Valle d\'Aosta con i miei amici.
            </p>
            <br>
          <img src="img/marconeve.gif" class="centro immagine img-responsive" alt="neve">
          <br>
            <p>
            Durante
            l\'estate 2016 sono stato ospite di una famiglia  a <b>Malta</b> per lavorare presso una televisione locale. Ho imparato moltissime cose sul montaggio dei video e
            sul mondo dei giornalisti
            e delle televisioni, oltre ad avere fatto una bellissima esperienza, insieme ad altri ragazzi italiani e inglesi che ho conosciuto là. Nel luglio 2017
            sono stato a <b>Portsmouth</b>, in viaggio di studio in un\'università, per due settimane.
            Nel 2018 sono stato in <b> Australia </b> per lo scambio studentesco e presso <b> A Coruña</b>, in Spagna per il progetto MOVE2MARKET di Erasmus+ E-35.
            Inoltre faccio l\'educatore del <b>grest</b> (parrochiale) del nostro paese per due settimane all\'anno, dove gestisco dei bambini di 9/10 anni:
            non è una cosa così semplice come sembra ! :)
          </p>
          <br><br>
          '
;
print($html.$footer);
?>
