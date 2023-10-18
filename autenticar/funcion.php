<?php
function registro(){
    $exit = '';
    include('una_perso.php');
    if(consultar_personas($connexion, $usuario, $password) == 1){
        $exit = 'ya exitse el suario';
    }else{
        ingresa_persona($connexion, $usuario, $password);
        $exit = 'usuario ingresado';
    }
    return $exit;
}

function consultar_personas(){


    $exit = "";
    $conec = new mysqli('localhost', 'root', 'root', 'tour_people' );

    $consultar = "select * from registro";
    if($documento != null) $sql .= "where Id = '$documento'";
    $resultado= $conec->query($consultar);
    while( $fil = mysqli_fetch_assoc($resultado)){

        $id= $fila['Id'];
        if($documento == null){
            $exit .= $docu = "<a href ='consulta_por_pelsona.php?doc=$docu'>".$fila['nombre'].$fila['apellido']. "</a>";

        }else{
            $exit .= "<h1>" .$fila['nombre']." ".$fila['apellido'];
            $exit .= "<hr>" .$fila['edad'];
            $exit .= "<h1>".$fila['edad']." ". $fila['fecha_nacimiento']." ". $fila['edad'];           
        }

        $exit .= "<br>";

    }
    $conec->close();
    return $exit;

}

function encontrar_persona($documento){

    $exit = 0;
    $conec = new mysqli('localhost', 'root', 'root', 'tour_people' );

    $consultar  = "select count(*) from registro where Id = '$documento'";
    $resultado = $conec->query( $consultar );
    

    while( $fila = mysqli_fetch_array( $resultado ) ){

        $exit = $fila[0];
    }

    $conec->close();

    return $exit;
}
?>