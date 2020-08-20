<?php
require('attivita_config.php');
$articolo='
      <h1 class="titoloCentrato">Sicurezza</h1>
      <div class="corpo1 text-center container-fluid">
        <div class="clearfix">
          <h2>Attività</h2>
          <br>
          <p>
            Il 28 febbraio 2017 abbiamo svolto la lezione sulla sicurezza della scuola e in generale su tutto il polo scolastico. Nel caso di evacuazione e anche nei casi particolari, (ad es. evacuazione durante un monteore) abbiamo ricordato le regole da rispettare
            e da tenere a mente per situazioni impreviste. Inoltre abbiamo analizzato un video, registrato nel 2015, su una prova di evacuazione al polo scolastico di Reggio Emilia e abbiamo notato i comportamenti positivi e quelli negativi.
          </p>

          <h2>Video evacuazione polo scolastico</h2>
          <p>Questo video spiega ogni comportamento da tenere in casi di emergenza ed è registrato al Polo Scolatico, è molto interessante e credo anche più efficace di tante parole, perchè raramente i ragazzi leggono le circolari sulla sicurezza... [Attiva
            la connessione internet].</p>

            <div class="immagine embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KMmkkvfDHMg" allowfullscreen></iframe>
            </div>
            '
  ;
  print($html.$articolo.$footer);
  ?>
