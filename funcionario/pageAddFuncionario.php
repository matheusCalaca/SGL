<?php include 'cabecario.php' ?>
	<span id="pagina" class="layout-hide" title="Adiciona Funcionario" name="FuncionarioAdd"></span>
	<div class="mdl-grid layout-margin-bottom--70px">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone layout-width-100porcento height-45px">
			<span class="mdl-layout-title">Adicianar um novo Funcionario</span>
		</div>
	</div>
	<div class="mdl-grid layout-width-655__max">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">

			<form action="#" method="post">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Nome</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">RG</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label cinza layout-width-100porcento__mobile">
					<label for="campoData" class="mdl-textfield__label"></label>
					<input type="date" name="campoData" id="campoData" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Telefone</label>
					<input type="tel" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
					<input class="mdl-textfield__input" placeholder="Foto" type="text" id="uploadFile" readonly/>
					<div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
						<i class="material-icons">attach_file</i><input type="file" id="uploadBtn">
					</div>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Cargo</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<hr>
				<h6 class="layout-margin-bottom--15px">Endereço</h6>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Logradouro</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Bairro</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Cidade</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-select mdl-js-select mdl-select--floating-label layout-width-100porcento__mobile">
					<select class="mdl-select__input" id="Turno" name="Turno">
						<option value=""></option>
						<option value="option1" class="cinza">Supervisão</option>
						<option value="option2" class="cinza">Gerente</option>
						<option value="option3" class="cinza">Almoxarifado</option>
						<option value="option4" class="cinza">Funcionario</option>
					</select>
					<label class="mdl-select__label" for="Turno">Permissão</label>
				</div>
				<hr>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">CPF</label>
					<input type="text" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoProduto" class="mdl-textfield__label">Senha</label>
					<input type="password" name="campoProduto" id="campoProduto" class="mdl-textfield__input" requerid>
				</div>
			</form>

		</div>
	</div>
<?php include '../rodape.php'; ?>