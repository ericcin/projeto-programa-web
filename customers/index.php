<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<?php include('modal.php'); ?>



<header>
	<div class="row">
		<div class="col-sm-6">

		</div>
		<div class="col-sm-6 text-right h2">
	    
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Caminho</th>
		<th>Imagem</th>
		<th>Titulo</th>
		<th>Publicada em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($imagens) : ?>
<?php foreach ($imagens as $imagem) : ?>
	<tr>
		<td><?php echo $imagem['id_imagem']; ?></td>
		<td><?php echo $imagem['imagem']; ?></td>
		<td class="actions text-right">
			<img src="<?php echo $imagem["imagem"]?>" width="260" height="200"/>
</td>
		<td><?php echo $imagem['titulo']; ?></td>
		<td><?php echo $imagem['imagem_criada_em']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $imagem['id_imagem']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $imagem['id_imagem']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="delete.php" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-imagem="<?php echo $imagem['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>