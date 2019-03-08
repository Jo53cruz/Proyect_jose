<?php /* /var/www/html/proyecto_jose/resources/views/contacto.blade.php */ ?>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario de Contacto</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo e(asset('css/form-contacto.css')); ?>" />
        <!-- Styles -->
       
        </style>
    </head>
    <body>
        
<form action="/my-handling-form-page" method="post">
    
<h2>CONTACTO</h2>

    <input type="text" name="nombre" placeholder="Nombre" >
    <input type="text" name="correo" placeholder="Correo" >
<input type="text" name="telefono" placeholder="Teléfono" >
<textarea name="mensaje" placeholder="Escriba aquí su mensaje"> </textarea>   
        <input type="button" vaue="ENVIAR" id="boton">
    
</form>




    </body>
</html>
