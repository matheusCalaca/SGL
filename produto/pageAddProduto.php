<?php include 'cabecario.php' ?>
<span id="pagina" class="layout-hide" title="Home Produto" name="ProdutoAdd"></span>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone layout-width-100porcento height-45px">
			<span class="mdl-layout-title">Adicianar um novo Produto</span>
		</div>
	</div>
	<div class="mdl-grid layout-width-655__max">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">

			<form action="#" method="post">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Produto</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
					<input class="mdl-textfield__input" placeholder="Imagem" type="text" id="uploadFile" readonly/>
					<div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
						<i class="material-icons">attach_file</i><input type="file" id="uploadBtn">
					</div>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label class="mdl-textfield__label" for="campoDescriçao">Descrição do Produto</label>
					<textarea class="mdl-textfield__input" type="text" id="campoDescriçao" name="campoDescriçao"></textarea>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label class="mdl-textfield__label" for="campoAcessorio">Acssórios do Produto</label>
					<textarea class="mdl-textfield__input" type="text" id="campoAcessorio" name="campoAcessorio"></textarea>
				</div>
			</form>

		</div>
	</div>
<?php include '../rodape.php'; ?>