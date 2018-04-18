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
			  <div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-tablet mdl-cell--12-col-phone col-width-margin texto-justificado">
			  	<!-- CARD -->
			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Perguntas frequentes</h2>
				  </div>
				  <div class="mdl-card__supporting-text col-width-margin">
					<h4><b>1. Como eu procuro uma monitoria específica?</b></h4>
					<h5>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nisi qui ipsum, deleniti beatae sed ipsa, totam ex omnis commodi odio est. Vel doloremque ratione itaque repellat praesentium velit voluptas?
					</h5>
					<h4><b>2. Quais os filtros disponíveis na pesquisa?</b></h4>
					<h5>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nisi qui ipsum, deleniti beatae sed ipsa, totam ex omnis commodi odio est. Vel doloremque ratione itaque repellat praesentium velit voluptas?
					</h5>
					<h4><b>3. Como eu consigo cadastrar uma monitoria?</b></h4>
					<h5>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nisi qui ipsum, deleniti beatae sed ipsa, totam ex omnis commodi odio est. Vel doloremque ratione itaque repellat praesentium velit voluptas?
					</h5>

				  </div>
				</div>				
				<!-- CARD -->
			  </div>
			  <!-- MDL CELL COL -->

			  <!-- MDL CELL COL -->	
			  <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone col-width-margin texto-justificado">

			  	<div class="mdl-card mdl-shadow--2dp card-monitoria">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Informações</h2>
				  </div>
				  <div class="mdl-card__supporting-text col-width-margin">
					<h4><b>Downloads</b></h4>
					<h5>
						Faça download do <a href="">manual de utilização</a> para alunos.
					</h5>
				  </div>
				</div>	

			</div>
			<!-- MDL GRID -->
	    </div>
	    <!-- CONTENT -->
	  </main>
<?php 
include('./modulos/footer.php');
 ?>