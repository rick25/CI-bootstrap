<div class="row"><!-- 4657-9501 rosa -->
	<form action="<?php echo base_url( 'articulos_controller/'.$action.'/' ); ?><?php if( isset( $id_registro ) ){ echo '/'.$id_registro; } ?>" method="post" class="form-horizontal" role="form">
		<!-- <form action="<?php echo base_url('articulos_controller/create'); ?>" method="post" class="form-horizontal" role="form"> -->
		<div class="form-group">
	    	<label class="col-sm-2 control-label" for="titulo">Titulo</label>
	    	<div class="col-sm-6">
	    		<input type="text" value="<?php if ( isset($datos_articulo) ) { echo $datos_articulo[0]['titulo']; } ?>" class="form-control" maxlength="30" id="titulo" name="titulo" placeholder="Ingrese titulo">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label class="col-sm-2 control-label" for="contenido">Contenido</label>
	    	<div class="col-sm-6">
	    		<input type="text" value="<?php if ( isset($datos_articulo) ) { echo $datos_articulo[0]['contenido']; } ?>" class="form-control" maxlength="140" id="contenido" name="contenido" placeholder="Contenido">
	    	</div>
	  	</div>
	  	<div class="col-sm-8">
	  		<button type="submit" class="btn btn-default pull-right"><?php if( $action == 'edit' ) { echo 'Actualizar';}else{ echo 'Crear'; } ?></button>
	  		<!-- <button type="submit" class="btn btn-default pull-right"><?php if( $action == 'edit' ) { echo 'Actualizar';}else{ echo 'Crear'; } ?></button> -->
	  	</div>
	</form>
</div><!-- fin row-->
<div class="row">
	<div class="col-sm-10">
		<div class="pull-right">
			<a href="<?php echo base_url('articulos_controller'); ?>" class="btn btn-primary">Volver</a>
		</div>
	</div>
</div>