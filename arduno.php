<?php
require('attivita_config.php');
$articolo='
      <h1 class="titoloCentrato">Arduino in gruppo</h1>
      <div class="corpo1 text-center container-fluid">
        <div class="clearfix">
          <br>
          <h2>Attività</h2>
          <br>
          <p>
            Il 16 gennaio 2017 abbiamo inziato la settimana di alternanza scuola-lavoro. La seduta si è svolta in multimedia A all\' interno del Bus Pascal, dove sono venuti a farci lezione Fabrizio Silvetti e alcuni dei suoi collaboratori della FunLab sulle prime
            funzioni di Arduino.
          </p>
          <img src="img/ardimg.png" alt="arduino" class="centro immagine img-responsive">
          <h2>Arduino</h2>
          <br>
          <p>
            Arduino è una piattaforma hardware programmabile attraverso un codice (softwere) composta da una serie di schede elettroniche dotate di un microcontrollore. È stata ideata e sviluppata da alcuni membri dell\' <i>Interaction Design Institute</i>            di Ivrea come strumento per la prototipazione rapida e per scopi hobbistici, didattici e professionali.
          </p>
          <p>
            Con Arduino si possono realizzare in maniera relativamente rapida e semplice piccoli dispositivi come controllori di luci(usando led), di velocità per motori, sensori di luce, autolavaggi, temperatura e umidità e molti altri progetti che utilizzano sensori,
            attuatori e comunicazione con altri dispositivi. È abbinato ad un semplice ambiente di sviluppo integrato per la programmazione del microcontrollore. Tutto il software a corredo è libero, e gli schemi circuitali sono distribuiti come hardware
            libero.
          </p>
          <div class="clearer"></div>
          <p><img src="img/ardug.jpg" alt="arduinogruppo" class="centro immagine img-responsive"></p>
          <h2>Arduino in gruppo</h2>
          <br>
          <p>
            Successivamente, andando avanti con le spiegazioni, ci siamo divisi in gruppi, e abbiamo svolto degli esercizi per imparare le basi. Abbiamo acceso i primi Led e iniziato ad usare potenziometri e partitori di tensione. Passo, passo abbiamo imparato sempre
            di più a gestire il codice fino a quando siamo quasi riusciti a fare un programma da soli; senza nessun aiuto, e per essere il primo giorno, per noi era già un traguardo.
          </p>
          <div class="clearer"></div>
          <p><img src="img/arprof.jpg" alt="Fabrizio Silvetti" class="centro immagine img-responsive"></p>
          <h3>Conclusioni</h3>
          <br>
          <p>Prima della fine della giornata abbiamo discusso per circa mezzora tutti insieme e abbiamo riassunto le capacità apprese durante la prima giornata della settimana di alternanza su Arduino. Credo che sia stata un attività molto produttiva, in
            quanto tutti i ragazzi hanno imparato qualcosa, chi sapeva meno ha appreso le basi, gli altri hanno imparato ad usare nuovi terminali come il potenziometro o il cicalino che emette suoni. Inoltre, i ragazzi della FunLab hanno fatto girare
            tra noi una chiavetta con il softwere Arduino, il codice di tutti i tipi di programmi affrontati durante la giornata e altri di approfondimento.
          </p>
          '
;
print($html.$articolo.$footer);
?>
