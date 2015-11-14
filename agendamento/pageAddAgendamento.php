<?php include 'cabecario.php'; ?>
	<span id="pagina" class="layout-hide" title="Adiciona Agendamento" name="AgendamentoAdd"></span>
	<div calss="mdl-grid" id="pesquisa">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<i class="material-icons layout-float--left layout-margin--top-20px layout__font-30size">search</i>
			<form action="#">
			  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width__calc-total-30px">
			    	<input class="mdl-textfield__input" type="text" id="campoPesquisa">
			    	<label class="mdl-textfield__label" for="campoPesquisa">Busca Produto</label>
			  	</div>
			</form>
		</div>
	</div>
		<div class="mdl-grid layout-margin--top--25px">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone layout-width-100porcento height-45px">
			<h4>Produto Disponiveis</h4>
		</div>
	</div>
	<div calss="mdl-grid" id="Tabela">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<div id="tabelaDescktop" class="">
				<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp layout-width-100porcento mdl-data-table__select">
					
					<thead>
					   	<tr>
					    	<th class="mdl-data-table__cell--non-numeric">Produto</th>
					    	<th class="mdl-data-table__cell--non-numeric">Imagem</th>
					      	<th class="mdl-data-table__cell--non-numeric">Codigo</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Projetor</td>
					     	<td class="mdl-data-table__cell--non-numeric"><img src="../imagem/item.jpg" alt="produto" width="50px" height="50px"></td>
					     	<td class="mdl-data-table__cell--non-numeric">145456</td>
					    </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<hr><h6 class="mdl-layout-title layout-margin-left-50porcento--125 layout-margin-bottom--10px">Formulario de Empréstimo</h6>
	<div class="mdl-grid layout-width-655__max">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<form action="#" method="post">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width-100porcento__mobile">
					<label for="campoFuncionario" class="mdl-textfield__label">Funcionário</label>
					<input type="text" name="campoFuncionario" id="campoFuncionario" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label cinza layout-width-100porcento__mobile">
					<label for="campoData" class="mdl-textfield__label"></label>
					<input type="date" name="campoData" id="campoData" class="mdl-textfield__input" requerid>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label cinza layout-width-100porcento__mobile">
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="campoPeriodo1">
						<input type="checkbox" id="campoPeriodo1" class="mdl-checkbox__input">
						<span class="mdl-checkbox__label">1° período</span>
					</label>
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="campoPeriodo2">
						<input type="checkbox" id="campoPeriodo2" class="mdl-checkbox__input">
						<span class="mdl-checkbox__label">2° período</span>
					</label>
				</div>
				<div class="mdl-select mdl-js-select mdl-select--floating-label layout-width-100porcento__mobile">
					<select class="mdl-select__input" id="Turno" name="Turno">
						<option value=""></option>
						<option value="option1" class="cinza">Matutino</option>
						<option value="option2" class="cinza">Vespertino</option>
						<option value="option3" class="cinza">Noturno</option>
					</select>
					<label class="mdl-select__label" for="Turno">Turno</label>
				</div>
			</form>
		</div>
	</div>
<?php include '../rodape.php'; ?>