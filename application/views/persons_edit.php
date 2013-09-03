<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>EDITAR</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/assets/css/style.css'; ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/assets/css/bootstrap.min.css'; ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/assets/css/bootstrap-responsive.min.css'; ?>"/>
    </head>
    <body>
        <div class="container">
                <div class="content">
 
                        <div id="errors">
                            <?php echo validation_errors(); ?>
                        </div><!-- #errors -->
                        <?php
                        echo form_open(base_url() . 'persons/edit/' . $person->id);
                        echo form_fieldset('Editar Pessoa');
 
						echo form_hidden('id', $person->id);
 
                        echo form_label('Name:', 'name');
                        echo form_input('name', $person->name);
 
                        echo form_label('E-mail:', 'email');
                        echo form_input('email', $person->email);
 
                        echo form_submit('edit', 'Salvar', 'class="btn btn-success"');
 
                        echo form_fieldset_close();
                        echo form_close();
                        ?>
 
					<a href="<?php echo base_url()?>persons" class="btn btn-primary">Voltar</a>
 
                </div><!-- .content -->
        </div><!-- .container -->
    </body>
</html>