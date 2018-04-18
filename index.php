<?php 
include('./modulos/header.php');
 ?>
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
<?php 
include('./modulos/footer.php');
 ?>