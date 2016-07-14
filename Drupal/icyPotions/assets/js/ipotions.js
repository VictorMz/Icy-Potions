(function($) {

	$(document).ready(function() {
	
		$('#myModal').fadeIn();
		
		$('.mayor').click(function () {
			$('.modal').fadeOut(300);
			$(".modal-backdrop").remove();
		});
		
		$('.menor').click(function () {
			window.history.back();
		});
		
		$('div.multifilter div.btn').click(function() {			
			var textoFiltro = $(this).data("multifilter");
			$('div.multifilter div.btn').removeClass('active');
			$(this).addClass('active');
			if(textoFiltro == 'todos'){
				$('div.pk-sabores > div.hidden').fadeIn('slow').removeClass('hidden');
			}else {				
				$('.pk-sabores > div').each(function() {					
					var myId = $(this).data("category").toString().split(",");					
					for (i = 0; i < myId.length; i++) { 
						change(textoFiltro , this);
					}	
				});				
			}			
			return false;
		});	
		

	});
	
	function change(tf , t){
		paquete = 'paq'+$(t).data("category");		
		if( tf !== undefined){							
			if( paquete.indexOf(tf) > -1 ){							
				$(t).fadeIn('slow').removeClass('hidden');
			}else{
				$(t).fadeOut('normal').addClass('hidden');
			}
		}
	}
		
})(jQuery);;