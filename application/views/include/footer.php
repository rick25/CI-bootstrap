</div>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
   <script>
   		$(document).ready(function () {
   			/*
   			$('.borrar_articulo').on('click',function (e) {
   				e.preventDefault();
   				alert("Desea Eliminar?");
   			});
			*/
			$('.borrar_articulo').dialog({
				modal: true,
				bgiframe: true,
				width: 300,
				height: 200,
				autoOpen: false,
				title: 'Eliminar'
		});
			});
   		});
   </script>
</body>
</html>
