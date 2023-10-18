<?php
if(isset($_GET['enviar'])){
    $nombre = $_GET['nombre'];
    $password = $_GET['contraseña'];
    $conec = new mysqli('localhost', 'root', 'root', 'tour_people');

    $consulta= "SELECT * FROM registro WHERE nombre='$nombre' AND contraseña='$password'";
    $resultado= $conec->query($consulta);

    if($resultado==true){
        if($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $nombres= $fila['nombre'];
                $email= $fila['correo'];

            }
            $resultado->close();
            header('location: formulario.php?mensaje=nombre: '. $nombres. ' '. 'correo:'. $email);
        }else{
            header('location: formulario.php?mensaje=mal');
        }
    }

}
