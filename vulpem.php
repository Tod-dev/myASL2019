<?php
require('attivita_config.php');

$articolo=
'
          <h1 class="titoloCentrato">React - Vulpem</h1>
          <div class="corpo1 text-center container-fluid">
            <div class="clearfix"></div>
              <br>

              <h2>Attività</h2>

              <img src="img/react.png" alt="React" class="centro immagine img-responsive">

              <br><br>

              <p>
                   Dal 15 al 18 ottobre 2018 ho partecipato alle lezioni su React.js tenute a scuola (aula Multimedia,
                    Blaise Pascal Reggio Emilia)
                    da Marco Argenteri dell\'azienda Vulpem.
              </p>

              <br>

              <h3>  COS’È REACT ? </h3>

              <br><br>

              <p>

                React è una libreria JavaScript per la costruzione di interfacce utente.
                È gestito da Facebook e da una comunità di singoli sviluppatori e aziende.
                React può essere utilizzato come base per lo sviluppo di applicazioni web o mobile unendo HTML,
                CSS e JavaScript, adottando l’approccio dichiarativo
                per la definizione dei componenti, parti significative e logiche, dell’interfaccia.
                I componenti sono come delle classi che mantengono uno stato interno e possono ricevere "props" in input (dati).
                La funzione "render()" visualizza tutti i componenti quando uno di essi cambia il suo stato.

              </p>

              <br><br>

              <img src="img/vulpem.jpg" alt="React" class="centro immagine img-responsive">


              <h3> Il nostro progetto </h3>

              <p>

              Inizialmente abbiamo imparato le basi della libreria,
              ,ele applicazioni, le sue potenzialità, come creare un primo progetto e come testare una web app.
              Abbiamo realizzato un\'app tutti insieme e infine ci siamo dedicati ai nostri progetti.
              Ho realizzato tre app e ho caricato i sorgenti su Github a questo <a href="https://github.com/marcotodaro5e?tab=repositories"> indirizzo </a>.
            </p>

            <img src="img/react-logo.png" alt="React" class="centro immagine img-responsive">


            <h3>Riflessioni e conclusioni</h3>

            <p>

              React è uno dei framework più usati al giorno d\'oggi e conoscerne almeno i concetti fondamentali è molto importante per noi programmatori.
              Sono contento di aver partecipato ad un corso avanzato come questo perchè sono concetti che a scuola non s\'insegnano e che prima o poi dovremo
              affrontare.
            </p>
            '
;
print($html.$articolo.$footer);
?>
