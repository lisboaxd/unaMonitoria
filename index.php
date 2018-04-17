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
</head>
<body>
	
	<!-- MDL LAYOUT -->	
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <span class="mdl-layout-title">Filtrar monitorias</span>
	      <div class="mdl-layout-spacer"></div>
	      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
	        <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
	          <i class="material-icons">search</i>
	        </label>
	        <div class="mdl-textfield__expandable-holder">
	          <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
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

	  <!-- MAIN -->
	  <main class="mdl-layout__content">
	  	<dialog class="mdl-dialog">
	  		<h6 class="mdl-dialog__title">Login</h6>
	  		<div class="mdl-dialog__content">
	  			<form action="mtr-adm/monitoria.html" id="form_logar" method="POST">
	  				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	  					<input class="mdl-textfield__input" type="text" id="sample3">
	  					<label class="mdl-textfield__label" for="sample3">Digite seu usuário</label>
	  				</div>

	  				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	  					<input class="mdl-textfield__input" type="password" id="sample3">
	  					<label class="mdl-textfield__label" for="sample3">Digite sua senha</label>
	  				</div>
	  			</form>
	  			<span id="tt1" class="">
				    <span class="mdl-chip__text"><i class="material-icons">info</i></span>
				</span>
	  			<p for="tt1" class="mdl-tooltip">
	  				Seu usuário é sua matrícula. 				
	  			</p>
	  			<a href=""> Esqueci minha senha!</a>
	  		</div>
	  		<div class="mdl-dialog__actions">
	  			<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" form="form_logar">Acessar</button>
	  			<button type="button" class="mdl-button close">Fechar</button>
	  		</div>
	  	</dialog>
	  	<!-- CONTENT -->
	    <div class="page-content">
			<!-- MDL GRID -->
			<div class="mdl-grid">
			  <!-- MDL CELL COL -->	
			  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--12-col-phone">			  	
			  	<!-- CARD -->
			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Monitoria: Banco de dados</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				    <b>Tags:</b> <a href="">tecnologia</a>, <a href="">engenharia</a>
				    <br/><hr/> 
				    <b>Monitor:</b> João Augusto Rezende
				    <br/><b>Data: 20/03/2018</b> - <b>19:00</b>
				    <br/><b>Sala: </b> 905
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="assets/files/mtr_bd.pdf" target="_blank">
				      Ver detalhes
				    </a>
				  </div>
				</div>
				<!-- CARD -->
			  </div>
			  <!-- MDL CELL COL -->
			  
			  <!-- MDL CELL COL -->	
			  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--12-col-phone">			  	
			  	<!-- CARD -->
			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Monitoria: Cálculo</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				    <b>Tags:</b> <a href="">tecnologia</a>, <a href="">engenharia</a>
				    <br/><hr/> 
				    <b>Monitor:</b> Joana D'arc Tavares
				    <br/><b>Data: 20/03/2018</b> - <b>19:00</b>
				    <br/><b>Sala: </b> 905
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="assets/files/mtr_calc.pdf"  target="_blank">
				      Ver detalhes
				    </a>
				  </div>
				</div>
				<!-- CARD -->
			  </div>
			  <!-- MDL CELL COL -->
			  
			  <!-- MDL CELL COL -->	
			  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--12-col-phone">			  	
			  	<!-- CARD -->
			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Monitoria: Teoria Cinética</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				    <b>Tags:</b> <a href="">tecnologia</a>, <a href="">engenharia</a>
				    <br/><hr/> 
				    <b>Monitor:</b> Manuela Goretti Silva
				    <br/><b>Data: 20/03/2018</b> - <b>19:00</b>
				    <br/><b>Sala: </b> 905
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="assets/files/mtr_tcin.pdf"  target="_blank">
				      Ver detalhes
				    </a>
				  </div>
				</div>
				<!-- CARD -->
			  </div>
			  <!-- MDL CELL COL -->
			</div>
			<!-- MDL GRID -->
	    </div>
	    <!-- CONTENT -->
	  </main>
	  <!-- MAIN -->

	  <!-- FOOTER -->
		<footer class="mdl-mini-footer">
		  <div class="mdl-mini-footer__right-section">
		    <div class="mdl-logo">Monitoria UNA</div>
		    <ul class="mdl-mini-footer__link-list mdl-cell--hide-tablet	mdl-cell--hide-phone">
		      <li>Sistemas de Informação, 2018.</li>
		      <li><a href="#">Privacidade & Termos</a></li>
		    </ul>
		  </div>
		</footer>
	  <!-- FOOTER -->
	</div>
	<!-- MDL LAYOUT -->	

<script>
	var dialog = document.querySelector('dialog');
	var showDialogButton = document.querySelector('#show-dialog');
	if (! dialog.showModal) {
		dialogPolyfill.registerDialog(dialog);
	}
	showDialogButton.addEventListener('click', function() {
		dialog.showModal();
	});
	dialog.querySelector('.close').addEventListener('click', function() {
		dialog.close();
	});
</script>
</body>
</html>