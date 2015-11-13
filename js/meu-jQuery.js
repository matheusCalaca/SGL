/*$(document).(function() {
	

});*/
$(window).load(function() {

		var qtBT = $('#botaoADD').nextAll().size();
		for (var i = 1; i <= qtBT; i++) {
			var nomePagina = $('#pagina').attr('name');
			alert("nome pagina = "+nomePagina);	
			var nomeBt = $('#botaoADD').attr('name');
			alert("nome button = "+nomeBt);

			if(nomePagina == nomeBt){
				$('#botaoADD').show('fast', function() {
					$(this).removeClass('layout-hide');

				});
			}
			
			alert("nome pagina = "+ $('#botaoADD').attr('name').next());	
		};
		


});