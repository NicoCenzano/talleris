<html>
    <head>
        <meta charset="UTF-8">
        <title>Create</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>Create</h3>
        <br>
         <form action="index.php">
        <?php
        include "connect.php";
        $clave=$_REQUEST['clave'];
        $nombre = $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $rut= $_REQUEST['rut'];
        $correo = $_REQUEST['correo'];

        $sql= "INSERT INTO `talleris`.`usuarios` (`nombres`, `apellidos`, `clave`, `rut`, `email`) VALUES ('".$nombre."', '".$apellido."', '".$clave."', '".$rut."', '".$correo."');";
        mysql_query($sql);
        
        ?>
        	<input type="submit" value="Volver">
        </form>

    </body>
</html>