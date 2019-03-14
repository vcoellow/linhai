<!doctype html>
<html lang="ES">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Linhai</title>
<meta name="description" content="Linhai" >
<meta name="keywords" content="Linhai">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' media='none' onload='this.media = "all";'>
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="assets/js/swiper.min.js"></script>
<link rel="stylesheet" href="assets/css/swiper.css">
</head>
<body>
<header>
  <div class="wrap">
    <div id="logo">
      <h1>Linhai</h1>
      <a href="index.php"><img src="assets/img/logo.png" alt="Linhai" width="328" height="67"/></a></div>
    <a href="cotizacion.php" class="cotizar">COTIZAR</a> </div>
  </div>
</header>
<section>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="assets/img/slider/cotice-una-moto-atv-linhai.jpg"></div>
    </div>
  </div>
</section>
<script>
var swiper = new Swiper('.swiper-container', {
    });		</script>
<section>
  <div class="wrap">
    <div style="width:76.5%; margin:auto;">
      <?php  $d = '';
		if(isset($_GET['cv'])){ $d='&cod_Version='.$_GET['cv'];}
	?>
      <iframe src="http://agsrcfo.gildemeister.cl/SRCFO/Cot_Web/FrmCotizadorWeb.aspx?co_marca=LIN&co_modelo=1<?php echo $d; ?>" name="contacto" width="800" marginwidth="0" height="1800" marginheight="0" scrolling="No" frameborder="0" id="contacto" allowtransparency="true" style="" align="middle"></iframe>
    </div>
  </div>
</section>
<footer>
  <div id="rs"> <a href="https://www.facebook.com/Linhai-791334404335404" class="circle-icon" title="Facebook"><i class="fa fa-facebook"></i></a></div>
</footer>
</body>
</html>