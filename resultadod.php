<html>
    <head>
        <meta charset="UTF-8">
        <title>Deleted</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>Deleted</h3>
        <br>
         <form action="index.php">
        <?php
        include "connect.php";
        
        $rut= $_REQUEST['rut'];
        
        $sql= "DELETE FROM `talleris`.`usuarios` WHERE `usuarios`.`rut` = $rut";
        mysql_query($sql);
        
        ?>
        	<input type="submit" value="Volver">
        </form>

    </body>
</html>