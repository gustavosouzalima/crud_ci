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
 
                <h2>Listar Pessoas pela coluna <?php echo strtoupper($campo); ?>:</h2>

                <table cellpadding="0" cellspacing="0">
                    <tr class="head">
                        <th>Pessoa</th>
                    </tr>
                    <?php
     
                    foreach ($persons as $person): ?>
                    <tr>
                        <td><?php echo $person ?></td>
                    </tr>
                <?php endforeach; ?>
                </table>
     
                <a href="<?php echo base_url()?>persons" class="btn btn-primary">Voltar</a>
            </div><!-- .content -->
        </div><!-- .container -->
    </body>
</html>