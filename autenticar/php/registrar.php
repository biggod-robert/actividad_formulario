
<a href="iniciar.php?mensaje=iniciar&nombre=&password=">iniciar</a>
<br>
<a href="registrar.php">registrar</a>
<br>
<a href="mostrar.php">mostrar</a>
<br>

<?php
if(isset($_GET['mensaje'])){
    $nombre = $_GET['nombre'];
    $password = $_GET['contraseña'];
    $conec = new mysqli('localhost', 'root', 'root', 'tour_people');

    $consulta= "insert into registro(nombre, contraseña)
    values( $nombre, $password );";
    $resultado= $conec->query($consulta);

    if($resultado==true){
        if($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $nombres= $fila['nombre'];
                $clave= $fila['contraseña'];

            }
            $resultado->close();
            header('location: formulario.php?mensaje=nombre: '. $nombres. ' '. 'contraseña:'. $clave);
        }else{
            header('location: formulario.php?mensaje=mal');
        }
    }

}

?>