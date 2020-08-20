<?php
session_start();

$_SESSION["a"]="";
$_SESSION["b"]="";
$_SESSION["c"]="";
$_SESSION["d"]='class="g"';

$navDropDown='<nav class="n2 navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="n3 navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="n1 navbar-brand" href="att.php">Attività</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="n nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attività 2016<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="linux.php">Linux Day</a></li>
            <li><a href="oliv.php">Olivetti Jobs</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gennaio 2017 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="arduno.php">Arduino in gruppo</a></li>
            <li><a href="iot.php">Iot</a></li>
            <li><a href="indus.php#">Industria 4.0</a></li>
            <li><a href="busin.php">Nuovi Business</a></li>
            <li><a href="muse.php">Stampante 3D</a></li>
            <li><a href="sprint.php">Sprint Contamina</a></li>
            <li><a href="sicu.php">Sicurezza</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aprile 2017<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ope.php">Open Data Day</a></li>
            <li><a href="parm.php">Sanpaolo Parma CED</a></li>
            <li><a href="arday.php">Arduino day</a></li>
            <li><a href="farmh.php">H-farm</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attività 2018<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="schind.php">School Industry</a></li>
            <li><a href="digcarrer.php">Digital Career</a></li>
            <li><a href="ot.php">Ot Consulting</a></li>
            <li><a href="e35.php">Erasmus E-35</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A.S. 2018/2019<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="vulpem.php">React Native - Vulpem</a></li>
          <li><a href="pasl.php">Presentazione ASL</a></li>
          <li><a href="archi.php">Archimede - Walk to Work</a></li>
          <li><a href="a&i.php">Alpha Test</a></li>
          <li><a href="itsmaker.php">ITSMAKER</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div class="corpo text-center container-fluid">';

$header='
<div class="container" id="cont">
  <h1>Alternanza Scuola Lavoro</h1>
  <hr></hr>
  <br><br>
';
$att=$header.$navDropDown;



require("config.php");

?>
