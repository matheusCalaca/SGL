<?php include 'cabecario.php' ?>
	<div calss="mdl-grid" id="pesquisa">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<i class="material-icons layout-float--left layout-margin--top-20px layout__font-30size">search</i>
			<form action="#">
			  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label layout-width__calc-total-30px">
			    	<input class="mdl-textfield__input" type="text" id="campoPesquisa">
			    	<label class="mdl-textfield__label" for="campoPesquisa">Busca Funcionario</label>
			  	</div>
			</form>
		</div>
	</div>
		<div class="mdl-grid layout-margin--top--25px">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone layout-width-100porcento height-45px">
			<h4>Lista de Funcionario</h4>
		</div>
	</div>
	<div calss="mdl-grid" id="Tabela">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cel--4-phone">
			<div id="tabelaDescktop" class="layout__header-personalizada__no--ative__mobile">
				<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp layout-width-100porcento mdl-data-table__select">
					
					<thead>
					   	<tr>
					    	<th class="mdl-data-table__cell--non-numeric">Nome</th>
					    	<th class="mdl-data-table__cell--non-numeric">Foto</th>
					      	<th class="mdl-data-table__cell--non-numeric">Função</th>
					      	<th class="mdl-data-table__cell--non-numeric">Editar</th>
					      	<th class="mdl-data-table__cell--non-numeric">Mais Iformações</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Romulo</td>
					     	<td class="mdl-data-table__cell--non-numeric"><img src="../imagem/funcionario/funci02.jpg" class="layout-margin--all-2px" alt="produto" width="50px" height="50px"></td>
					     	<td class="mdl-data-table__cell--non-numeric">Professor</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">
									Mais
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Rodrigo</td>
					     	<td class="mdl-data-table__cell--non-numeric"><img src="../imagem/funcionario/funci03.jpg" class="layout-margin--all-2px" alt="produto" width="50px" height="50px"></td>
					     	<td class="mdl-data-table__cell--non-numeric">Professor</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">
									Mais
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Raissa</td>
					     	<td class="mdl-data-table__cell--non-numeric"><img src="../imagem/funcionario/funci01.jpg" alt="produto" class="layout-margin--all-2px" width="50px" height="50px"></td>
					     	<td class="mdl-data-table__cell--non-numeric">Cordenadora</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">
									Mais
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
					    	<th class="mdl-data-table__cell--non-numeric">editar</th>
					      	<th class="mdl-data-table__cell--non-numeric">Emprestimo</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Romulo</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">
									Mais
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Rodrigo</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">
									Mais
								</button>
					     	</td>
					    </tr>
					    <tr>
					     	<td class="mdl-data-table__cell--non-numeric">Raissa</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
									<i class="material-icons layout__font-18size">mode_edit</i>
								</button>
					     	</td>
					     	<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">
									Mais
								</button>
					     	</td>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php include 'rodape.php'; ?>