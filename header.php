<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-194025374-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-194025374-1');
</script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $titulo; ?></title>
        <meta name="description" content="Cour moto Crans-Montana, cour auto ecole Crans-Montana">
<meta name="keywords" content="Cour moto Sierre, cour auto ecole Sierre, Theorie sierre, sensibilisation sierre, conduite voiture, prof d'auto �cole, auto �cole, conduite">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- BS -->
<link rel="stylesheet" href="css/vendor/bootstrap.min.css">

<link rel="stylesheet" href="css/vendor/bootstrap-theme.min.css" >

        <!-- owl -->
         <link rel="stylesheet" href="js/vendor/owl-carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="js/vendor/owl-carousel/assets/owl.theme.default.min.css">
        <!--animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <!-- awesome font-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

        <!--header-->
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="barasup"></div>
    <nav role="navigation" id="contenav">

    <div class="contenedor" id="barra">
    <div class="logo"><a href="index.php"><img src="imas/L-safer_drive_logo.svg" alt="Macadam Auto Moto drive school"></a></div>

    <ul id="redes" class="escritorio">

            <li>News ><a href="https://www.facebook.com/macadamautomoto/" target="_blank"> <img src="imas/facebook.svg" alt="facebook L Safer Drive">  </a></li>

    </ul>

    <div class="clearfix"></div>
     <ul id="menu" class="escritorio">
        <p id="slogan">"Une formation pour la vie"</p>
        <li class="<?php if($activo == 'news'){echo 'activo';};  ?>"><a href="index.php">News</a> </li>
         <li class="<?php if($activo == 'accueil'){echo 'activo';};  ?>"><a href="accueil.php">Accueil</a> </li>
         <li class="<?php if($activo == 'theorie'){echo 'activo';};  ?>"><a href="theorie.php">Théorie</a> </li>
         <li class="<?php if($activo == 'sensibilisation'){echo 'activo';};  ?>"><a href="sensibilisation.php">Sensibilisation</a></li>
         <li class="<?php if($activo == 'voiture'){echo 'activo';};  ?>"><a href="voiture.php">Voiture</a></li>
          <li class="<?php if($activo == 'moto'){echo 'activo';};  ?>"><a href="moto.php">Moto</a></li>
          <li class="<?php if($activo == 'contact'){echo 'activo';};  ?>"><a href="contact.php">Contact</a></li>

     </ul>
     <div class="clearfix"></div>
     </div>
    </nav>
    <!-- menu cel-->
    <a id="nav-toggle" href="#" class="muestra_tab"><span></span></a>
<p id="slogan2">"Une formation pour la vie"</p>
<div class="menu_cel">
    <ul>
        <li class="<?php if($activo == 'news'){echo 'activo';};  ?>"><a href="index.php">News</a> </li>
      <li class="<?php if($activo == 'accueil'){echo 'activo';};  ?>"><a href="accueil.php">Accueil</a> </li>
         <li class="<?php if($activo == 'theorie'){echo 'activo';};  ?>"><a href="theorie.php">Théorie</a> </li>
         <li class="<?php if($activo == 'sensibilisation'){echo 'activo';};  ?>"><a href="sensibilisation.php">Sensibilisation</a></li>
         <li class="<?php if($activo == 'voiture'){echo 'activo';};  ?>"><a href="voiture.php">Voiture</a></li>
          <li class="<?php if($activo == 'moto'){echo 'activo';};  ?>"><a href="moto.php">Moto</a></li>
         <li class="<?php if($activo == 'contact'){echo 'activo';};  ?>"><a href="contact.php">Contact</a></li>
     </ul>
      <ul id="redes_cel">
   <a href="https://www.facebook.com/macadamautomoto/" target="_blank">
            <li> <img src="imas/facebook.svg" alt="facebook L Safer Drive"></li></a>

    </ul>
</div>

<div id="preloader">
<div class="cssload-container">
<div class="cssload-speeding-wheel"></div>
</div>
</div>
