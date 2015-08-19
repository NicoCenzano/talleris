<html>
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>Update</h3>
        
        Seleccione el usuario que desea editar:
		<br>
		 <form action="toupdate.php">
            <select name="rut">
		 	<?php
        include "connect.php";
        

        $sql= "SELECT `rut` FROM 'usuarios';";
        $resultado=mysql_query($sql);
        while($fila=mysql_fetch_array($resultado)){
           
                echo "<option value='".$fila['rut']."'>".$fila['rut']."</option>";
        }
        
        ?> </select>
        	<input type="submit" value="TO UPDATE">
        </form>
        
        <br>
        <br>
         <form action="index.php">
        	<input type="submit" value="Volver">
        </form>



        <?php
        // put your code here
        ?>

    </body>
</html>