<?php 
include('./modulos/header.php');
 ?>

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
			  <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone col-width-margin texto-justificado">
			  	<!-- CARD -->
			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Tecnologias utilizadas</h2>
				  </div>
				  <div class="mdl-card__supporting-text col-width-margin">
					<h5>
						Neste projeto nós utilizamos tecnologias Web:
						<br/>
						<br/>Front-end: Material Design Lite.
						<br/>Back-end: Node JS.
						<br/>Banco de dados: MySQL.
					</h5>
				  </div>
				</div>				
				<!-- CARD -->
			  </div>
			  <!-- MDL CELL COL -->

			  <!-- MDL CELL COL -->	
			  <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone col-width-margin texto-justificado">
			  	<!-- CARD -->
			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Versionamento</h2>
				  </div>
				  <div class="mdl-card__supporting-text col-width-margin">
					<h5>
						Versões das tecnologias:
						<br>
						<br/>Material Design Lite: 1.0.
						<br/>Banco de dados: 1.0.
						<br/>Angular: 1.0.
					</h5>
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


 <?php 
include('./modulos/footer.php');
 ?>