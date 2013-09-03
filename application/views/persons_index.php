<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>LISTAR</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/assets/css/style.css'; ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/assets/css/bootstrap.min.css'; ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/assets/css/bootstrap-responsive.min.css'; ?>"/>
    </head>
    <body>
        <div class="container">
		<div class="content">
 
			<h2>Todas Pessoas</h2>
 
			<!-- <a href="<?php echo base_url()?>persons/listar" class="btn btn-info">Listar Pessoas</a> -->
            <label for="coluna">Lista por:</label>
            <?php
                echo form_open(base_url() . 'persons/listar');
                echo form_dropdown('coluna', $coluna);
				echo form_submit('add', 'Buscar', 'class="btn btn-info" id="buscar"');

				echo form_close();
				?>

			<a href="<?php echo base_url()?>persons/add" class="btn btn-primary">Adicionar Pessoa</a>
 
			<table cellpadding="0" cellspacing="0">
				<tr class="head">
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th class="actions">Ação</th>
				</tr>
				<?php
 
				foreach ($persons as $person): ?>
				<tr>
					<td><?php echo $person->id; ?>&nbsp;</td>
					<td><?php echo $person->name; ?></td>
					<td><?php echo $person->email; ?></td>
					<td class="actions">
						<a href="<?php echo base_url()?>persons/edit/<?php echo $person->id; ?>" class="btn btn-info">Editar</a>
						<a href="<?php echo base_url()?>persons/delete/<?php echo $person->id; ?>" class="btn btn-danger">Deletar</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
 
		</div><!-- .content -->
        </div><!-- .container -->
    </body>
</html>