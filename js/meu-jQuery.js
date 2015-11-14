/*$(document).(function() {
	

});*/
$(window).load(function() {

			var condicao = false;
			var qtBT = $('#botaoADD').nextAll().size();

				var nomePagina = $('#pagina').attr('name');
				alert("nome pagina = "+nomePagina);	
				var nomeBt = $('#botaoADD').attr('name');
				var bt = $('#botaoADD');
				alert("nome button = "+nomeBt);
			do{
				if(nomePagina != nomeBt){
					nomeBt = $(bt).next().attr('name');
					bt = $(bt).next();
				}
					
				if(nomePagina == nomeBt){
					alert("nome button = "+(bt).attr('name'));
					$(bt).show('fast', function() {
						$(bt).removeClass('layout-hide');
					});
					var condicao = true;
				}
			}while(condicao != true);

	
});