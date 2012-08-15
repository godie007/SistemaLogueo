<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <?php echo form_open('principal/login') ?>
        <?php echo form_label('Usuario: ', 'usuario') ?>
        <?php echo form_input(array('name' => 'usuario', 'id' => 'nombre', 'size' => '50')) ?>
        <?php echo form_label('Contraseña: ', 'contrasena') ?>
        <?php echo form_input(array('name' => 'contrasena', 'id' => 'contrasena', 'size' => '50')) ?>
        <?php echo form_submit('enviar', 'Enviar') ?>
        <?php echo form_close() ?>

    </body>
</html>