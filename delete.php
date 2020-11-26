<?php
    include("php\phpconect.php");
    $id=$_GET['id'];
    echo"$id";
    $consultar="
    DELETE FROM libro
    WHERE id_libro = $id";
    $resultado = mysql_query($consultar,$link);
    if(!$resultado){
        echo"error al eliminar";
    }else{
        header('Location: consultbook.php');
    }
?>