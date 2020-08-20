<?php
require('attivita_config.php');
$articolo='
      <h1 class="titoloCentrato">Arduino Day</h1>
      <div class="corpo1 text-center container-fluid">
        <div class="clearfix">
          <p><img src="img/arduina.jpg" alt="ard1" class="right immagine img-responsive"></p>
          <h2>Attività</h2>
          <br>
          <p>
            Il 1° aprile 2017 siamo andati all\'Arduino Day, in via canalina a Reggio Emilia per partecipare all\'attività di arduino, in contemporanea con moltissimi altri posti nel mondo, in collaborazione con il comune di Reggio e con i ragazzi di Impact Hub.
          </p>

          <div class="clearer"></div>
          <br><br>
          <p><img src="img/arduinb.jpg" alt="ard2" class="left immagine img-responsive"></p>
          <h3>Inizio Esercizi</h3>
          <br>
          <p>
            Come sempre ci siamo divisi in gruppi e abbiamo iniziato a fare esercizi, prima guidati da una ragazza, che ci correggeva gli errori, poi da soli, con i nostri computer, abbiamo fatto diversi programmi. Per prima cosa, abbiamo fatto: <b>Un semaforo</b>            (tre led colorati), <b>un fotoresistore</b> (per vedere la presenza di luce) e un esercizio sull\'uso degli
            <b>infrarossi e del telecomando</b> (comando da remoto).
            <div class="clearer"></div>
            <p>
              Poi per quanto riguarda gli esercizi più difficili, fatti da noi, il più particolare, a cui ho partecipato, è <b> il tastierino con i suoni (tastiera musicale)</b>, sensibile al tatto (abbiamo iniziato a farlo e ci siamo quasi riusciti ma
              purtroppo per problemi di tempo non siamo riusciti ad arrivare in fondo al programma).</p>
          </p>
          <div class="clearer"></div>
          <img src="img/arduinc.jpg" alt="ard3" class="right immagine img-responsive">
          <h3>Conclusioni</h3>
          <p>
            In poche ore di lavoro abbiamo imparato moltissimo, perchè avevamo a disposizione ragazzi molto svegli e bravi che ci hanno aiutato e soprattutto ci hanno spinto a lavorare anche dopo 5 ore di Arduino, facendoci così migliorare, sia nella scrittura del
            codice che nel componimento dell\'hardwere. Oltre a tutto questo, ci siamo messi alla prova, testando nuovi componenti, molto complicati, cosa che non è così facile come può sembrare e credo che dovremmo essere soddisfatti degli obiettivi raggiunti
            dai noi ragazzi in questa giornata.
          </p>
          <br><br>
          '
;
print($html.$articolo.$footer);
?>
