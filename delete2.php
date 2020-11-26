<?php
    include("php\phpconect.php");
    $id=$_GET['id'];
    $consultar="
    DELETE FROM eventos
    WHERE id_evento = $id";
    $resultado = mysql_query($consultar,$link);
    if(!$resultado){
        echo"error al eliminar";
    }else{
        header('Location: consultevent.php');
    }
?>