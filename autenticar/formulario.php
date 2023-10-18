<?php
function consultar_personas(){

    $exit = '';
    $consultar = "SELECT * FROM registro WHERE nombre='$nombre'";
    $resultado = $connexion->query($consultar);
    if($resultado == true){
        if($resultado->num_rows > 0){
            $exit = 1;
        }else{
            $exit = 0;
        }
    }else{
        $exit = 'fallo en la cosunlta';
    }
    return $exit;
}

function ingresa_persona($nombre, $password){
    $exit = "";
    $conec = new mysqli('localhost', 'root', 'root', 'tour_people' );
    $consultar = "INSERT INTO registro(id, nombre, apellido, fecha_nacimiento, edad, correo, contraseña, ) VALUES('789', '$nombre', 'runco', '2003-09-24', '21', 'ffe@gmail.com','$password')";
    $resultado = $conec->query($consultar);
    if($resultado == true){
        $exit = 'datos ingresados correctamnete';
    }else{
         $exit = 'no se ingreso nada mala consulta';
    }
    return $exit;
    }
    





?>

