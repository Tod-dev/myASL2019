<?php
require('attivita_config.php');
$articolo='
      <h1 class="titoloCentrato">Stampante 3D</h1>
      <div class="corpo1 text-center container-fluid">
        <div class="clearfix">
          <h2>Attività</h2>
          <br>
          <p>
            Il 20 gennaio 2017 abbiamo svolto la quinta lezione della settimana di alternanza scuola-lavoro. La seduta si è svolta presso i musei civici di Reggio Emilia, dove abbiamo sperimentato l\'utilizzo della stampante 3D.
          </p>
          <img src="img/stama.jpg" alt="Stampante 3D" class="right immagine img-responsive">
          <br><br><br>
          <h2>Stampante 3D</h2>
          <br>
          <p><i>
                    Per Stampa 3D si intende la realizzazione di oggetti tridimensionali mediante produzione additiva,
                    partendo da un modello 3D digitale. Il modello digitale viene prodotto con software dedicati e
                    successivamente elaborato per essere poi realizzato, strato dopo strato, attraverso una stampante 3D.
                    La stampa 3D nasce nel 1986, con la pubblicazione del brevetto di Chuck Hull, che inventa la
                    stereolitografia, che egli stesso definisce:
                    "Un sistema per generare oggetti tridimensionali".
                  </i>
          </p>
          <div class="clearer"></div>
          <br><br>
          <p><img src="img/stamb.jpg" alt="nuovi business" class="left immagine img-responsive"></p>
          <h3>Workshop</h3>
          <br>
          <p>
            Dopo la spiegazione dell\'esperta della venere di chiozza, sulla storia e sulle origini, ci siamo divisi in gruppi e abbiamo iniziato a disegnare la possibile riproduzione in plastica. Poi abbiamo scansionato il disegno migliore e, infine, dopo qualche
            ritocco, grazie al softwere della stampante, abbiamo mandato in stampa la nostra riproduzione. Dopo venti minuti abbiamo preso il risultato dalla stampante, è stato bellissimo, anche se purtuppo non assomigliava per niente all\'originale, la
            nostra "bravura" nel disegno è stata evidenziata anche troppo. Attività definita dal sito dei musei civici di Reggio Emilia: "<b>workshop di scansione e stampa 3D</b>, Workshop gratuito sulle tecniche di scansione e stampa 3D applicate
            ai beni culturali a cura di Spazio Gerra e GEIS srl in collaborazione con Musei Civici, FabLab Reggio Emilia, Officina 3Dlab".

          </p>
          '
;
print($html.$articolo.$footer);
?>
