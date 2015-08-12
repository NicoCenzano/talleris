<html>
    <head>
        <meta charset="UTF-8">
        <title>Read</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>Read</h3>
        
        Estos son los usuarios hasta el minuto:
		<br>
        <table>
            <tr>
                <th>RUT</th><th>Nombres</th><th>Apellidos</th><th>Correo Electrónico</th>
            </tr>
		 <?php
        include "connect.php";
        

        $sql= "SELECT `nombres`,`apellidos`,`rut`,`email` FROM 'usuarios';";
        $resultado=mysql_query($sql);
        while($fila=mysql_fetch_array($resultado)){
            echo "<tr>";
                echo "<td>".$fila['rut'].$fila['nombre'].$fila['apellido'].$fila['email']."</td>";
            echo "</tr>";
        }
        
        ?>
        </table>
        <br>
        <br>
         <form action="index.php">
        	<input type="submit" value="Volver">
        </form>



        

    </body>
</html>