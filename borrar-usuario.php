<?php

$precisa_sesion = true;
$msg_error = 0;

require('templates/coneccion.php');

$id = $_REQUEST['id'];

$sql = mysqli_query($db, 'DELETE FROM usuarios WHERE id=' . $id . ';');

header("location: editar-usuarios.php");
die();
?>