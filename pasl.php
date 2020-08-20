<?php
require('attivita_config.php');

$articolo=
'
          <h1 class="titoloCentrato">Presentazione alternanza</h1>
          <div class="corpo1 text-center container-fluid">
            <div class="clearfix"></div>
              <br>
              <h2>Attività</h2>
              <p>
                In data 16-11-2018, siamo stati chiamati per esporre la nostra esperienza di alternanaza scuola-lavoro in azienda.
                Durante l\'estate ho partecipato allo <a href="ot.php">stage in Ot consulting</a> dal 21 Maggio al 29 Giugno 2018.
                Di seguito allego le slide della mia presentazione (google slide).
              </p>
              <h3>Slide della presentazione</h3>

              <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vR3yu_tKlmZSD4sWkWN6gw4TdsdqIeNNxleNlZpgtup_aldLth-smgOsuaQxp8n43ZHUXWpf2elMZ-8/embed?start=false&loop=false&delayms=3000"

              frameborder="0" width="1000" height="700" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
'
;
print($html.$articolo.$footer);
?>
