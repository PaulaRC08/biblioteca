<?php
include("php\phpconect.php");

$autores="select a.id_autor, a.nombre_autor
from autor a";
$r_autores = mysql_query($autores,$link);

$pais_libro = "select p.id_pais_libro, p.nombre_pais_libro
from pais_libro p";
$r_pais_libro = mysql_query($pais_libro,$link);

$editorial_libro = "select ed.id_editorial, ed.nombre_editorial
from editorial ed";
$r_editorial_libro = mysql_query($editorial_libro,$link);

$genero_libro = "select g.id_genero,g.nombre_genero
from genero g";
$r_genero_libro = mysql_query($genero_libro,$link);

$idioma_libro = "select i.id_idioma, i.nombre_idioma
from idioma i";
$r_idioma_libro = mysql_query($idioma_libro ,$link);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Add_book</title>
  <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="animate__swing">Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssPropio/Style.css">

</head>
<body style="background-color: #F8F8F8;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script  type="text/javascript">
  $(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        yearRange: [1500,2020]
    });
  });
</script>
<script  type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>

<?php
    $id=$_GET['id'];
    $consulta_datos="select b.id_libro,b.nombre_libro,b.id_autor_fk,b.id_editorial_fk,b.id_genero_fk,b.id_idioma_fk,b.id_pais_fk, a.nombre_autor, e.nombre_editorial, g.nombre_genero, i.nombre_idioma, p.nombre_pais_libro, b.fecha_publicacion
    from libro b, autor a, editorial e, genero g, idioma i, pais_libro p
    where 
    b.id_autor_fk=a.id_autor and
    b.id_editorial_fk=e.id_editorial and
    b.id_genero_fk=g.id_genero and
    b.id_idioma_fk=i.id_idioma and
    b.id_pais_fk=p.id_pais_libro and
    b.id_libro=$id
    order by b.nombre_libro asc";
    $resultado_registro = mysql_query($consulta_datos,$link);
?>


<div class="wrapper">
    <div class="sidebar">
        <div class="row">
            <div class="col">
            <img src="Imagenes/logoB3.png" class="mx-auto d-block" style="width:95%"alt="">
            </div>
        </div>
        <div style="margin:15% 0 0 0;">
            <ul>
                <li><a style="margin:0% 0% 0% 1%;" href="Bienvenida.php"><i class="fas fa-home"></i>Inicio</a></li>
                <div>
                    <h6 style="padding: 15px;border-bottom: 1px solid #CB3232;border-bottom: 1px; solid rgba(0,0,0,0.05);
                     border-top: 1px solid rgba(255,255,255,0.05); color:#CB3232;border-left:  5px solid #CB3232;"><i class="fas fa-book" style="color:#CB3232;margin:0% 8% 0% 0%;"></i>Libros</h6>
                </div>
                <li><a style="margin:0% 0% 0% 15%;" href="Addbook.php"><i class="fas fa-plus-circle"></i>Agregar libro</a></li>
                <li><a style="margin:0% 0% 0% 15%;" href="consultbook.php"><i class="fas fa-search"></i>Consultar libro</a></li>
                <div>
                    <h6 style="padding: 15px;border-bottom: 1px solid #CB3232;border-bottom: 1px; solid rgba(0,0,0,0.05);
                     border-top: 1px solid rgba(255,255,255,0.05); color:#CB3232;border-left:  5px solid #CB3232;"><i class="fas fa-calendar-alt" style="color:#CB3232;margin:0% 8% 0% 0%;"></i>Eventos</h6>
                </div>
                <li><a style="margin:0% 0% 0% 15%;" href="addevent.php"><i class="fas fa-calendar-check"></i>Agregar evento</a></li>
                <li><a style="margin:0% 0% 0% 15%;" href="consultevent.php"><i class="fas fa-search"></i>Consultar evento</a></li>
            </ul> 
            <div>
            <li><a class="mov" style="font-weight: 500; padding: 11px 20%; position: absolute;bottom: 0;width: 100%; color:white; background-color: #d40000; font-weight: 500%; text-decoration: none;" href="Nosotros.php">
            <i style="margin:0% 8% 0% 0%;" class="fa fa-file-code fa-lg" ></i>NOSOTROS</a></li>
            </div>
            <div>
            <li><a class="mov" style="font-weight: 500; padding: 11px 12%; position: absolute;bottom: 50px;width: 100%; color:white; background-color: #d40000; font-weight: 500%; text-decoration: none; " href="iniciars.php">
            <i style="margin:0% 8% 0% 0%;" class="fa fa-door-open" ></i>CERRAR SESION</a></li>
            </div>
        </div>
    </div>
    <div class="main_content">
        <div style="width:100%;">
            <img src="Imagenes\Librosedit.jpg" class="mx-auto d-block" style="width:100%;"alt="">
        </div>
        <div class="info">
            <div style="margin: 0% 8% 0% 8%;">
                <div class="row adt no-gutters"  style="margin: 0%;">
                    <div class="col-12" >
                        <div class="row">
                <!-- *********************************************************************************************-->
                            <form class="col-12" action="" method="GET">
                                <div class="row">
                                <?php
                                    $reg=mysql_fetch_array($resultado_registro);
                                    extract ($reg);
                                    echo"
                                    <input placeholder='Digite el nombre del libro' value='$id_libro' name='id' type='hidden' class='validate'>
                                    ";
                                    ?>
                                    <div class="input-field col s12" style="margin:2% 0 0 0;">
                                    <?php
                                    echo"
                                    <input placeholder='Digite el nombre del libro' value='$nombre_libro' name='nomb' type='text' class='validate'>
                                    ";
                                    ?>
                                    <label for="first_name">Nombre Libro</label>
                                    </div>
                                </div>
                                <div class="row" style="margin:0% 0 0 0;">
                                    <div class="input-field col s6">
                                        <select name="autorlibro">
                                            <?php
                                                while($registro_autor=mysql_fetch_array($r_autores))
                                                {
                                                extract ($registro_autor);
                                                    if($id_autor_fk==$id_autor){
                                                    echo"<option value='$id_autor'>$nombre_autor</option>";
                                                    }else{
                                                    echo"<option value='$id_autor'>$nombre_autor</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <label style="font-size: 100%;" >Autor</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="pais">
                                            <?php
                                                while($registro_pais=mysql_fetch_array($r_pais_libro))
                                                {
                                                    extract ($registro_pais);
                                                    if($id_pais_fk==$id_pais_libro){
                                                    echo"<option value='$id_pais_libro'>$nombre_pais_libro</option>";
                                                    }else{
                                                        echo"<option value='$id_pais_libro'>$nombre_pais_libro</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <label style="font-size: 100%;" >Pais del libro</label>
                                    </div>
                                </div>
                                <div class="row" style="margin:0% 0 0 0;">
                                    <div class="input-field col s6">
                                        <select name="editorial">
                                            <?php
                                                while($registro_editorial=mysql_fetch_array($r_editorial_libro))
                                                {
                                                    extract ($registro_editorial);
                                                    if($id_editorial_fk==$id_editorial){
                                                    echo"<option value='$id_editorial_fk'>$nombre_editorial</option>";
                                                    }else{
                                                        echo"<option value='$id_editorial'>$nombre_editorial</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <label style="font-size: 100%;" >Editorial</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="genero">
                                            <?php
                                                while($registro_genero=mysql_fetch_array($r_genero_libro))
                                                {
                                                    extract ($registro_genero);
                                                    if($id_genero_fk==$id_genero){
                                                    echo"<option value='$id_genero_fk'>$nombre_genero</option>";
                                                    }else{
                                                        echo"<option value='$id_genero'>$nombre_genero</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <label style="font-size: 100%;" >Genero</label>
                                    </div>
                                </div>
                                <div class="row" style="margin:0% 0 0 0;">
                                    <div class="input-field col s6">
                                    <?php                                                
                                    echo"
                                    <input placeholder='Elige la fecha de publicacion' name='fecha_publi' value='$fecha_publicacion' type='text' class='datepicker'>";
                                    ?>
                                    <label for="first_name">Fecha de publicacion</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name='idioma'>
                                            <?php
                                                $reg=mysql_fetch_array($resultado_registro);
                                                extract ($reg);
                                                $cont=1;
                                                while($registro_idioma=mysql_fetch_array($r_idioma_libro))
                                                {
                                                    extract ($registro_idioma);
                                                    if($id_idioma_fk==$id_idioma){
                                                        echo"<option value='$id_idioma_fk'>$nombre_idioma</option>";
                                                    }else{
                                                        echo"<option value='$id_idioma'>$nombre_idioma</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <label style="font-size: 100%;" >Idioma</label>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col">
                                        <button style="min-width: 30% !important;" class="btn red accent-4 waves-effect waves-light" type="submit" name="action">Editar
                                        <i class="material-icons right">create</i>
                                        </button>
                                    </div>
                                </div>  
                            </form>
                <!-- *********************************************************************************************-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper" style="background-color: #EBEBEB;">
        <div class="container">
            <div class="row" style="margin:1% 0% 1% 0%;">
                <div class="col-sm center-align">
                <h6><h6 style="font-weight: 500;">Direccion:</h6>Av. Carrera 15 No 1-06. Zipaquira</h6>
                </div>
                <div class="col-sm center-align " >
                <h6><h6 style="font-weight: 500;">Telefono:</h6>+57 031 8510005</h6>
                </div>
                <div class="col-sm center-align" >
                <h6><h6 style="font-weight: 500;">Correo:</h6>contactenos@imcrdz.com </h6>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>

<?php
if(isset($_GET['action'])){

    if(empty($_GET['nomb']) || empty($_GET['autorlibro']) || empty($_GET['pais']) || empty($_GET['editorial']) ||
    empty($_GET['genero']) || empty($_GET['fecha_publi']) || empty($_GET['idioma']) ){
      echo "<script>M.toast({html: 'Digite todos los datos', classes: 'rounded red darken-4'}); </script> ";
    }else{
      $id=$_GET['id'];
      $nombre_libro=$_GET['nomb'];
      $autor=$_GET['autorlibro'];
      $pais=$_GET['pais'];
      $editorial=$_GET['editorial'];
      $genero=$_GET['genero'];
      $fecha_publicacion=$_GET['fecha_publi'];
      $idioma=$_GET['idioma'];
      $consulta_libro="UPDATE libro l
      SET l.id_autor_fk=$autor,l.id_editorial_fk=$editorial,l.id_genero_fk=$genero,l.id_idioma_fk=$idioma,l.id_pais_fk=$pais,
      l.fecha_publicacion='$fecha_publicacion',l.nombre_libro='$nombre_libro' 
      WHERE l.id_libro= $id";
      $resultado = mysql_query($consulta_libro,$link);
      if(!$resultado){
        echo "error de registro";
      }else{
        header('Location: consultbook.php?id='.urlencode($nombre_libro));
        echo "<script type='text/javascript'>M.toast({html: 'Libro editado exitosamente!!!', classes: 'rounded green '}); </script> ";
      }      
    }
}
?>

</body>
</html>