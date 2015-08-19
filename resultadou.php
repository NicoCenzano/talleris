<html>
    <head>
        <meta charset="UTF-8">
        <title>Updated</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>Updated</h3>
        <br>
         <form action="index.php">
        <?php
        include "connect.php";
        $nombre = $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $rut= $_REQUEST['rut'];
        $correo = $_REQUEST['correo'];

        $sql= "UPDATE `talleris`.`usuarios` SET `nombres` = '".$nombre."', `apellidos` = '".$apellido."', `email` = '".$correo."' WHERE `usuarios`.`rut` = '".$rut."';";
        mysql_query($sql);
        
        ?>
        	<input type="submit" value="Volver">
        </form>

    </body>
</html>