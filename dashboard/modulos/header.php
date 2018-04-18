<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Monitoria UNA</title>
	

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="../assets/pics/favicon.ico">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../assets/css/material.min.css">
	<link rel="stylesheet" href="../assets/css/estilo.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
	
	<!-- MDL LAYOUT -->	
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <span class="mdl-layout-title">Informações de perfil</span>
	      <div class="mdl-layout-spacer"></div>
	    </div>
	  </header>
	  <div class="mdl-layout__drawer">
	    <!-- LOGO -->
	    <span class="mdl-layout-title"><a href="monitoria.php"><img src="../assets/pics/logo.png" alt="" width="100%" height="100%"></a></span>

	    <!-- Menu -->
	    <?php 
	    include('./modulos/menu.php');
	     ?>
	  </div>
