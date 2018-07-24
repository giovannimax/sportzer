<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
</head>
<body>
<div id='app'></div>
 @if(session('flogin'))
  <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
@endif


  <!-- //////////////////////////////////////////////////////////////////////////// -->



