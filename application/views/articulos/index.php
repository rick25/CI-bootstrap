<h1>Lista de Articulos</h1>
<?php if ( empty( $articulos ) ) : ?>		<!-- si es que no esta seteado articulos-->
	<p>No hay articulos en la BD.</p>
<?php else :  ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Titulo</th>
				<th>Contenido</th>
				<th colspan="3"><div class="text-center">Opciones</div></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ( $articulos as $articulo ) : ?>
			<tr>
				<td><?php echo $articulo['id']; ?></td>
				<td><?php echo $articulo['titulo']; ?></td>
				<td><?php echo $articulo['contenido']; ?></td>
				<td>
					<a href="<?php echo base_url('articulos_controller/show/'.$articulo['id']); ?>" class="btn btn-primary"><i class="fa fa-eye"></i> Ver</a>
				</td>
				<td>
					<a href="<?php echo base_url('articulos_controller/edit/'.$articulo['id']); ?>" class="btn btn-warning"><i class="fa fa-pencil fa-fw"></i> Editar</a>
				</td>
				<td>
					<a href="#" class="btn btn-danger borrar_articulo"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<a href="<?php echo base_url('articulos_controller/create/'); ?>" class="btn btn-success">Nuevo Articulo</a>