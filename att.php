<?php
require('attivita_config.php');
$articolo='
    <h1 class="titoloCentrato">Menù Attività</h1>
    <div class="corpo1 text-center container-fluid">
      <div class="clearfix">
        <br>
        <h2>Attività</h2>
        <p>
          In questa sezione troverai tutte le attività di alternanza scuola-lavoro che io e la mia classe abbiamo svolto. Per approfondirle nello specifico puoi aprire uno degli atricoli qui sopra nel menù o nella seguente lista.
        </p>
        <h3>Questa è la lista delle attività</h3>

        <ul class="nos">

          <li>
            <p><a href="linux.php">Linux Day</a> (22-10-2016)</p>
          </li>
          <!--       -->
          <li>
            <p><a href="oliv.php">Olivetti-Jobs</a> (29-10-2016)</p>
          </li>
          <li>
            <p><a href="arduno.php">Arduino in gruppo</a> (16-01-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="iot.php">Iot</a> (17-01-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="indus.php">Industria 4.0</a> (18-01-2017)</p>
          </li>
          <!--       -->
          <li>
            <p><a href="busin.php">Nuovi Business</a> ( 19-01-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="muse.php">Stampante 3D</a> (20-01-2017)</p>
          </li>
          <!--     -->
          <li>
            <p><a href="sprint.php">Sprint Contamina</a> (21-01-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="sicu.php">Sicurezza</a> (28-02-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="ope.php">Open Data Day</a> (04-03-2017)</p>
          </li>
          <!--       -->
          <li>
            <p><a href="parm.php">Sanpaolo Parma CED</a> (28-03-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="arday.php">Arduino day</a> (01-04-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="farmh.php">H-farm</a> (04-04-2017)</p>
          </li>
          <!--      -->
          <li>
            <p><a href="schind.php">School Industry</a> (19-01-2018</p>
            <li>
              <!--      -->
              <li>
                <p><a href="digcarrer.php">Digital Career</a> (14-04-2018)</p>
              </li>
              <!--      -->

              <li>
                <p><a href="ot.php">Ot Consulting</a> (21-05-2018 -> 29-06-2018)</p>
              </li>
              <!--       -->
              <li>
                <p><a href="e35.php">Erasmus + E-35</a> (01-08-2018 -> 05-09-2018)</p>
              </li>
              <!--      -->
              <li>
                <p><a href="vulpem.php">React Native - Vulpem</a> (15,16,17,18-10-2018)</p>
              </li>
              <!--      -->
              <li>
                <p><a href="pasl.php">Presentazione ASL</a> (16-11-2018)</p>
              </li>
              <!--      -->
              <li>
                <p><a href="archi.php">Archimede - Walk to Work</a> (15-12-2018)</p>
                <li>
                  <!--      -->
                  <li>
                    <p><a href="a&i.php">ALPHA TEST</a> (22-02-2019)</p>
                  </li>
                  <!--      -->
                  <li>
                  <p><a href="itsmaker.php">ITSMAKER</a> (26-02-2019)</p>
                  </li>
                  <!--      -->



        </ul>
        <br>
        <img src="img/gruppo.jpg" alt="classi 3E e 3M" class="centro immagine img-responsive">
        <br><br>
          '
;
print($html.$articolo.$footer);

/*

<li><a href="ot.php">Ot Consulting</a></li>
<li><a href="e35.php">Erasmus E-35</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A.S. 2018/2019<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="vulpem.php">React Native - Vulpem</a></li>
<li><a href="archi.php">Archimede - Walk to Work</a></li>
<li><a href="pasl.php">Presentazione ASL</a></li>
<li><a href="a&i.php"> ALPHA TEST & ITSMAKER</a></li>



*/
?>
