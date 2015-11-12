<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- auxilia para o desenvolvimento mobile-->
	<title>SGL</title><!--Titulo-->
	<link rel="icon" href="../imagem/DesenhoLogo/Logo.png"  type="image/png"/><!--icone-->

	<!--Conectores material designer lite-->
	<link rel="stylesheet" href="../bower_components/material-design-lite/material.min.css"><!--class de cor do designer  e CSS-->
	<script src="../bower_components/material-design-lite/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--meu CSS-->
	<link rel="stylesheet" href="../css/estilo.css">
	<!--meu JS-->
	<script src="../js/meu.js"></script>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">
		<header class="mdl-layout__header">
			<div class="titulos center">
				<span class="mdl-layout-title span-personalizada__center-24size personalizada__no--ative">SGL- Sistema de Gerenciamento de Locação</span> 
				<span class="mdl-layout-title span-personalizada__center-36size personalizada__ative layout__header-personalizada__no--ative">SGL</span>
			</div>		
		</header><!-- /header -->
		<div class="mdl-layout__drawer">
			<div class="tituloDrawer mdl-layout-title">
				<img src="../imagem/DesenhoLogo/Logo.png" alt="Logo da empresa" width="auto" height="32px" class="layout-float--left layout-margin--all-10px">
				<span class="mdl-layout-title layout-margin--top-15px">SGL</span>
				</div>
				<nav class="mdl-navigation">
					<a href="../agendamento" class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect">Agendamento</a>
					<a href="index.php" class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect">Funcionario</a>
					<a href="../produto" class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect">Produto</a>
					<a href="../almoxarifado" class="mdl-navigation__link mdl-button mdl-js-button mdl-js-ripple-effect">Almoxarifado</a>
				</nav>
			</div>	<!--Gaveta de menus-->
		<main class="mdl-layout__content">
				
