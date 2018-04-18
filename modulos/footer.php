		<!-- FOOTER -->
		<footer class="mdl-mini-footer">
			<div>
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
var showModalButton = document.querySelector('.show-modal');
if (! dialog.showModal) {
	dialogPolyfill.registerDialog(dialog);
}
showModalButton.addEventListener('click', function() {
	dialog.showModal();
});
dialog.querySelector('.close').addEventListener('click', function() {
	dialog.close();
});
</script>
</body>
</html>