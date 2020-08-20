<?php
session_start();

$_SESSION["a"]="";
$_SESSION["b"]="  ";
$_SESSION["c"]='class="g"';
$_SESSION["d"]="";
require("config.php");
$html.='


<div class="container" id="cont">
  <h1>Alternanza Scuola Lavoro</h1>
  <hr></hr>


  <br><br>
  <div class="corpo text-center container-fluid">
    <h1 class="titoloCentrato">Olivetti-Jobs</h1>
    <div class="corpo1 text-center container-fluid">
      <div class="clearfix">

        <img src="img/olivetti.jpg" class="centro immagine img-responsive" alt="Azienda Olivetti S.P.A.">

        <br>

        <h2>L\'Azienda</h2>
        <p>Il percorso di alternanza della mia classe è iniziato il 29 Ottobre 2016 grazie alla visione di un video, nell\'ora di informatica, che metteva a confronto due grandi visionari mossi dall\'idea di cambiare il mondo con le loro scoperte e la loro
          organizzazione del lavoro, quali erano Steve Jobs e Adriano Olivetti .
          <img src="img/operai.jpg" class="right immagine img-responsive" alt="ASL"> Le idee, le visioni hanno un\'alleata. È l\'arte del dire. Adriano Olivetti e Steve Jobs hanno avuto la capacità di prevedere il futuro inventandolo. E sapendolo raccontare.
          Adriano dà vita a una progetto utopistico di fabbrica "solidale" con il territorio. Una fabbrica che non insegue il solo profitto, ma mette al centro il benessere della comunità. Le parole usate da Olivetti sembrano più quelle di un padre
          spirituale che di un uomo d\'affari: </p>

        <p>"Il tentativo sociale della fabbrica di Ivrea [...], risponde a una semplice idea: creare un\'impresa di tipo nuovo al di là del socialismo e del capitalismo giacchè i tempi avvertono che nelle forme estreme in cui i due termini della questione
          sociale sono posti, l\'uno contro l\'altro, non riescono a risolvere i problemi dell\'uomo e della società moderna. [...] La nostra Società crede perciò nei valori spirituali, nei valori della scienza, crede nei valori dell\'arte, crede nei valori
          della cultura, crede, infine, che gli ideali di giustizia non possano essere estraniati dalle contese ancora ineliminate tra capitale e lavoro. Crede soprattutto nell\'uomo, nella sua fiamma divina, nella sua possibilità di elevazione e di
          riscatto." ("Alle Spille d\'oro", Ivrea, 19 dicembre 1954 in Adriano Olivetti, Il mondo che nasce, cit.)</p>
        <h2> Nasce il primo PC :</h2><br>
        <p>Olivetti S.p.A. è una società del gruppo Telecom Italia che opera nel settore dell\'informatica. In passato è stata una delle aziende più importanti al mondo nel campo delle macchine per scrivere, da calcolo e dell\'elettronica. Tra i suoi primati
          più significativi vi sono l\'Elea 9003 e la Programma 101: l\'Elea può essere considerato il primo calcolatore completamente a transistor; la seconda è stata il primo calcolatore personale da cui sono derivati gli attuali personal computer (PC).</p>
        <div class="clearer"></div>
        <img src="img/prg.jpg" class="left immagine img-responsive" alt="programma 101">
        <p>Come si può ben capire la Olivetti è entrata nella storia grazie al programma 101 (primo PC) e a tutte le invenzioni che hanno sviluppato dal 1960 fino ai giorni nostri. Il primo personal computer della Olivetti, era in grado di operare su dati
          alfanumerici e disponeva di una memoria di lavoro interna, un sistema di salvataggio dati su unità magnetica e una piccola ed avanzata stampante come sistema di output. Fu progettata dall\'ingegnere Pier Giorgio Perotto (in omaggio al quale
          assunse il soprannome di Perottina) insieme a Giovanni De Sandre e Gastone Garziera, e presentata per la prima volta alla grande esposizione dei prodotti per ufficio BEMA di New York nell\'ottobre 1965. Ne furono vendute circa 44 mila unità,
          un numero enorme considerando il periodo storico e la conoscenza che le persone avevano dell\'informatica al tempo, per questo motivo è da considerarsi anche il "primo personal computer" di massa della storia.
        </p>
        <h2>Olivetti-Jobs</h2>
        <p>Steve, come Adriano, ha un pallino: cambiare il mondo. I suoi discorsi sono storie nelle quali i prodotti assumono dimensioni eroiche, perfino salvifiche."Solo coloro che sono abbastanza folli da pensare di cambiare il mondo, lo cambiano davvero".
          La parola chiave dell\'innovatore Steve Jobs è "rivoluzione". Steve Jobs deve tutto all\'Italia, sono stati i nostri designer e il nostro amore per l\'estetica a fare di un abile imprenditore il genio della Apple. Infatti quest\'ultimo ha visitato
          la Olivetti più volte e si è presentato alla International Design Conference di Aspen dove dagli italiani apprese i principi del design funzionale, che definì quello stile che sta alla base del suo spettacolare successo. Queste sono le sue
          parole sulla influenza che hanno avuto i designer italiani su di lui: «È stata una fonte di ispirazione incredibile». Il programma 101 della Olivetti vendette molto ma poi l\'azienda andò in crisi e la Apple(fondata da Steve), prese spazio
          nel mercato con i primi Mac, inoltre Steve prese i privilegi che dava ai lavoratori Adriano Olivetti e li trasformò in realtà anche per i dipendenti della Apple. Adriano Olivetti e Steve Jobs sono stati due sognatori che hanno avuto la capacità
          di condividere le proprie visioni attraverso gli oggetti che hanno prodotto e le parole che hanno pronunciato.</p>

        <p>Questo breve video racconta la storia del colosso informatico, quale era la Olivetti S.P.A.. [Attivare la connessione internet].
        </p>
        <div class="immagine embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/mQzhlyuYRBA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br>
        <p>
          Oltre a questi due personaggi immensi, per la loro personalità e per quello che sono riusciti a creare, per un compito di lingua inglese e di informatica, prima a scuola con la prof. Ricceri e poi a casa per impararlo in inglese, abbiamo visto un video
          di "TED talks" su Linus Tovalds, colui che ha inventato Linux (<a href="linux.php">Linux Day</a>, open source).</p>
          '
;
print($html.$footer);
?>
