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

	<link rel="shortcut icon" href="assets/pics/favicon.ico">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="assets/css/material.min.css">
	<link rel="stylesheet" href="assets/css/estilo.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script src='assets/js/polifill.js'></script>

	<!--getmdl-select-->   
	<link rel="stylesheet" href="./assets/css/getmdl-select-master/getmdl-select.min.css">
	<script defer src="./assets/css/getmdl-select-master/getmdl-select.min.js"></script>
</head>
<body>
	<dialog class="mdl-dialog">
		<h6 class="mdl-dialog__title">Login</h6>
		<div class="mdl-dialog__content">
			<form action="#" id="form_logar" method="POST">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="sample3">
					<label class="mdl-textfield__label" for="sample3">Digite seu usuário</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="password" id="sample3">
					<label class="mdl-textfield__label" for="sample3">Digite sua senha</label>
				</div>
			</form>
			<span id="tt1" class="mdl-chip">
				<span class="mdl-chip__text">Dica</span>
			</span>
			<p for="tt1" class="mdl-tooltip"><b>Usuário:</b> (código administrativo)
				<b>Senha: </b>CPF
			</p>
			<a href="#">Preciso de ajuda</a>
			
		</div>
		<div class="mdl-dialog__actions">
			<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" form="form_logar">Acessar</button>
			<button type="button" class="mdl-button close">Fechar</button>
		</div>
	</dialog>
	
	<!-- MDL LAYOUT -->	
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title" id="span_filtrar">Filtrar monitorias</span>
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield mdl-textfield--floating-label mdl-textfield--align-right">
					<div class="mdl-textfield mdl-js-textfield getmdl-select">
						<input class="mdl-textfield__input" value="" id="fixed-header-drawer-exp" readonly/>
						<input value="" type="hidden" name="filtro"/>
						<label class="mdl-textfield__label" for="filtro">Filtre a matéria</label>
						<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="filtro">
							<li class="mdl-menu__item" data-val="estat">Estatística</li>
							<li class="mdl-menu__item" data-val="calculo">Cálculo</li>
							<li class="mdl-menu__item" data-val="parad">Paradigmas</li>
							<li class="mdl-menu__item" data-val="redes">Redes</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<!-- LOGO -->
			<span class="mdl-layout-title"><a href="index.html"><img src="assets/pics/logo.png" alt="" width="100%" height="100%"></a></span>
			<!-- LOGO -->
<?php 
include('./modulos/menu.php');
 ?>
		</div>