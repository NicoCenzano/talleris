<html>
    <head>
        <meta charset="UTF-8">
        <title>ToUpdate</title>
    </head>
    <body>
        <h1>Taller de Ingeniería en Software</h1>
        <h3>To Update</h3>
        <?php 
            $rut=$_REQUEST['rut'];
        include "connect.php";
        

        $sql= "SELECT `nombres`,`apellidos`,`email` FROM 'usuarios' where 'rut'=$rut;";
        $resultado=mysql_query($sql);
        while($fila=mysql_fetch_array($resultado)){
            $nombre=$fila['nombres'];
            $apellido=$fila['apellidos'];
            $correo=$fila['email'];
        }
        
        ?>
        Estás editando al usuario con RUT <?php echo $rut; ?>:
        <br>
         <form action="resultadou.php">
            <?php
            echo "Nombre: <input type='text' name='nombre' placeholder='".$nombre."'><br>";
            echo "Apellido: <input type='text' name='apellido' placeholder='".$apellido."'><br>";
            echo "Correo electrónico: <input type='text' name='correo' placeholder='".$correo."'><br>";
            ?>
            
            <input type="submit" value="UPDATE">
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