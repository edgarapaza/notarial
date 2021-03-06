<?php
date_default_timezone_set('UTC');
session_start();
if (isset($_SESSION["personal"])) {
    require_once '../../Model/cone.php';
    $link = new ConexionClass();
    $link->Conectado();

    $codigo_usuario = $_SESSION['personal'];

    $fecha_ini = date("Y-m-d");
    $sql = "SELECT CONCAT(nom_usu,' ',pat_usu,' ',mat_usu) AS Trabajador FROM usuarios WHERE cod_usu = $codigo_usuario";
    $query = $link->consulta($sql);
    $dato1 = $link->fetch_array($query);
?>

<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <title>Sistema de Ingreso-Archivo Regional de Puno</title>
        <meta name="description" content="Escritura Publica">
        <meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="../../css/estilo.css">
        <link rel="stylesheet" href="../../css/normalize.css">
        <!-- <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
        <!-- <script>(function(){var a;if(navigator.platform==="iPad"){a=window.orientation!==90||window.orientation===-90?"img/startup-tablet-landscape.png":"img/startup-tablet-portrait.png"}else{a=window.devicePixelRatio===2?"img/startup-retina.png":"img/startup.png"}document.write('<link rel="apple-touch-startup-image" href="'+a+'"/>')})()</script> -->
        <!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
        <meta http-equiv="cleartype" content="on">
        <script src="js/libs/modernizr-2.5.3.min.js"></script>
        <script src="js/libs/modernizr-2.0.6.min.js"></script>
    </head>
    <body>
        <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
        <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        <section id="contenedor">
            <header>
                <label>Usuario en el Sistema: <?php echo $dato1["Trabajador"];?></label>
                <label><a href="../Admin1/report_personal.php?trab=<?php echo $codigo_usuario ?>&fecha_ini=<?php echo $fecha_ini ?>">Ver mis ingreso del Dia</a></label>
                <label><a href="../../Controler/session_close.php">Salir del Sistema</a></label>
            </header>
            <br />
            <section id="botonera">
                <a href="./otorgantes.php">Ingresar Escritura</a>
            </section>
            <br />
            <br />
            <br />
            <footer>
                <p>Mapa del Sitio Web</p><p>   | </p><p>  Politica de Seguridad </p><p>  | </p><p>  Quienes Somos</p>
                <p>  | </p><p>Materiales de Capacitacion</p>
                <div id="logo">
                    <img src="../../img/arp_logo.png" /><br/>
                    <p>Copyright   2012 - Area de Informatica</p>
                </div>
            </footer>
        </section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<!-- scripts concatenated and minified via ant build script -->
<script src="js/helper.js"></script>
<!-- end concatenated and minified scripts-->
<!-- <script src="https://getfirebug.com/firebug-lite.js"></script> -->
<script> // Change UA-XXXXX-X to be your site's ID
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>
</body>
</html>
<?php
  }
  else{
    header("Location:../../index.php");
}
?>