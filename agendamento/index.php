<?php include 'cabecario.php' ?>
	<div calss="mdl-grid" id="pesquisa">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<i class="material-icons layout-float--left layout-margin--top-20px layout__font-30size">search</i>
			<form action="#">
			  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width__calc-total-30px">
			    	<input class="mdl-textfield__input" type="text" id="campoPesquisa">
			    	<label class="mdl-textfield__label" for="campoPesquisa">Busca Agendamento</label>
			  	</div>
			</form>
		</div>
	</div>
	<div class="mdl-grid layout-margin--top--25px">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone layout-width-100porcento height-45px">
			<h4>Lista de Agendamento</h4>
		</div>
	</div>
	<div calss="mdl-grid" id="Tabela">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<div id="tabelaDescktop" class="layout__header-personalizada__no--ative__mobile">
				<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp layout-width-100porcento mdl-data-table__select">
					
					<thead>
					   	<tr>
					    	<th class="mdl-data-table__cell--non-numeric">Funcionario</th>
					    	<th class="mdl-data-table__cell--non-numeric">Produto</th>
					      	<th class="mdl-data-table__cell--non-numeric">Codigo</th>
					      	<th class="mdl-data-table__cell--non-numeric">Data Agendamento</th>
					      	<th class="mdl-data-table__cell--non-numeric">Situação</th>
					      	<th class="mdl-data-table__cell--non-numeric">Editar</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Manuel</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projetor</td>
					     	<td class="mdl-data-table__cell--non-numeric">145456</td>
					     	<td class="mdl-data-table__cell--non-numeric">31/10/2015</td>
					     	<td class="mdl-data-table__cell--non-numeric">Agardando retirada</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Joaquin</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projetor</td>
					     	<td class="mdl-data-table__cell--non-numeric">123456</td>
					     	<td class="mdl-data-table__cell--non-numeric">31/10/2015</td>
					     	<td class="mdl-data-table__cell--non-numeric">Agardando Devolução</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Artur</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projetor</td>
					     	<td class="mdl-data-table__cell--non-numeric">145456</td>
					     	<td class="mdl-data-table__cell--non-numeric">31/10/2015</td>
					     	<td class="mdl-data-table__cell--non-numeric">Agardando Devolução</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Luiz</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projetor</td>
					     	<td class="mdl-data-table__cell--non-numeric">1234256</td>
					     	<td class="mdl-data-table__cell--non-numeric">31/10/2015</td>
					     	<td class="mdl-data-table__cell--non-numeric">Agardando Retirada</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<div id="tabelaMobile" class="layout__header-personalizada__no--ative layout-display--flex__mobile">
				<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp layout-width-100porcento">
					<thead>
					   	<tr>
					    	<th class="mdl-data-table__cell--non-numeric">Funcionario</th>
					    	<th class="mdl-data-table__cell--non-numeric">Produto</th>
					      	<th class="mdl-data-table__cell--non-numeric">Editar</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Manuel</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projeto</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Joaquin</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projeto</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Artur</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projeto</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Luiz</td>
					     	<td class="mdl-data-table__cell--non-numeric">Projeto</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					    </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php include 'rodape.php'; ?>