<?php
//session_start();

if (!isset($_SESSION["a"])) $_SESSION["a"]="";
if (!isset($_SESSION["b"])) $_SESSION["b"]="";
if (!isset($_SESSION["c"])) $_SESSION["c"]="";
if (!isset($_SESSION["d"])) $_SESSION["d"]="";
// class="g"

$g1=$_SESSION["a"];
$g2=$_SESSION["b"];
$g3=$_SESSION["c"];
$g4=$_SESSION["d"];
$head='
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>ASL MT</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
';

$nav='

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <button type="button" id="cc" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div id="aa" class="navbar-brand">
        <a href="CHIs.php" id="abianco">  <font face="Lucida Handwriting">Marco Todaro</font>  </a>
        </div>

      </div>


      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul id="bb" class="nav navbar-nav navbar-right">

          <li><a href="index.php" '.$g1.'>Home</a></li>
          <li><a href="CHIs.php" '.$g2.'>Chi sono</a></li>
          <li><a href="oliv.php" '.$g3.'>Olivetti-Jobs</a></li>
          <li><a href="att.php" '.$g4.'>Attività</a></li>


        </ul>
      </div>
    </div>
  </nav>';

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
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>';

$footer='
          <div class="footer1 container-fluid">
            <b>Contatti:</b><i> <a href="mailto:marcoposta59@gmail.com">Mail</a></i>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="clearer"></div>
  <br>


  <div class="scrolltotop">SU</div>
';




$script_end="
  <script type='text/javascript'>
    $(document).ready(function() {

      $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
          $('.scrolltotop').fadeIn();
        } else {
          $('.scrolltotop').fadeOut();
        }
      });
      $('.scrolltotop').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 800);
        return false;
      });
    });
  </script>

</body>

</html>
";
if(!isset($att))$att="";
$html=$head.$nav.$att;

$footer=$footer.$script_end;

//define("Constant","Hello Geeks!");
//$ciao=("<i>bello</i>")



/*
Per inserire il php generato nell' HTMl
->$bla='bla'; //nel file config.php
->require("config.php"); $html='<p>blabla '.$bla.'</p>'; print($html);
*/
?>
