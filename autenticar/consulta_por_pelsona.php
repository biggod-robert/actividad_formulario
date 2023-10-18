<?php
include("funcion.php");
$documento= $_GET['doc'];

echo consultar_personas( $documento );


?>