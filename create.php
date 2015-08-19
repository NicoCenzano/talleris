<html>
    <head>
        <meta charset="UTF-8">
        <title>Create</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>Create</h3>
        
        Para crear un nuevo usuario complete los siguientes campos:
		<br>
		 <form action="resultadoc.php">
		 	Nombre: <input type="text" name="nombre"><br>
		 	Apellido: <input type="text" name="apellido"><br>
		 	RUT: <input type="text" name="rut"><br>
		 	Correo Electrónico: <input type="text" name="correo"><br>
		 	Contraseña: <input type="password" name="clave"><br>
		 	Vuelva a ingresar su contraseña: <input type="password" name="clave2"><br>

        	<input type="submit" value="CREATE">
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