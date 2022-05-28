<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <title>main</title>
</head>
<body>
    <h1>Vista de nuevo</h1>
    <p><?php echo $this->mensaje; ?></p>
    <form action="<?php echo constant('URL'); ?>nuevo/registrar" method="POST">
        <input type="text" name="matricula">
        <input type="text" name="nombre">
        <input type="text" name="apellido">

        <input type="submit" value="enviar">
    </form>
</body>
</html>