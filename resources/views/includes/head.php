<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Sportzer: A SOFTWARE-AS-A-SERVICE FOR ORGANIZING INDIVIDUAL SPORTS EVENT">
  <meta name="keywords" content="sportzer, SOFTWARE-AS-A-SERVICE, FOR ORGANIZING INDIVIDUAL SPORTS EVENT">
  <title>Sportzer</title>

  <!-- Favicons-->
  <link rel="icon" href="sportzer-info/sportzer-otherbackground.png" sizes="32x32">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  
  <!-- Custome CSS-->    
  <link href="css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- Media CSS -->
  <link href="css/media.css" type="text/css" rel="stylesheet" media="screen,projection">

    <?php if(basename($_SERVER['PHP_SELF']) == 'app-login.php' || basename($_SERVER['PHP_SELF']) == 'app-register.php') {?>
      <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    <?php } ?> 

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
   
  
  <?php if(basename($_SERVER['PHP_SELF']) == 'app-calendar.php') {?>
    <link href="js/plugins/fullcalendar/css/fullcalendar.min.css" type="text/css" rel="stylesheet" media="screen,projection">   
  <?php } ?>   

  <?php if(basename($_SERVER['PHP_SELF']) == 'app-event.php') {?>
   <!--jsgrid css-->
    <link href="js/plugins/jsgrid/css/jsgrid.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jsgrid/css/jsgrid-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection"> 
  <?php } ?>     
</head>
<body>
  <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->



