<!DOCTYPE html>
<html>
<head>
  <title>Consult_event</title>
  <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="animate__swing">Biblioteca</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssPropio/Style.css">

</head>
<body style="background-color: #F8F8F8;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>

function confirmacion(){
    if (confirm("Esta seguro de eliminar el registro")){
        return true;
    }else{
        return false;
    }
}
</script>


<?php
include("php\phpconect.php");

if(isset($_POST['action'])){

    if(empty($_POST['buscador'])){
        $consultar_todos="SELECT e.id_evento,e.fecha_evento,e.nombre_evento,e.hora_inicio,e.hora_final,e.lugar,e.informacion
        from eventos e
        order by e.fecha_evento asc";
        $resultado = mysql_query($consultar_todos,$link);
      echo "<script>M.toast({html: 'Escriba el evento a buscar', classes: 'rounded red darken-4'}); </script> ";
    }else{
      $nombre_evento=$_POST['buscador'];
      $consulta_libro="SELECT e.id_evento,e.fecha_evento,e.nombre_evento,e.hora_inicio,e.hora_final,e.lugar,e.informacion
      from eventos e
      where e.nombre_evento='$nombre_evento'
      order by e.fecha_evento asc;";
      $resultado = mysql_query($consulta_libro,$link);
      if(!$resultado){
        echo "<script type='text/javascript'>M.toast({html: 'Evento No encontrado', classes: 'rounded red darken-4'}); </script> ";
      }else{
          $val = mysql_num_rows ($resultado );
          if($val == 0){
            $consultar_todos="SELECT e.id_evento,e.fecha_evento,e.nombre_evento,e.hora_inicio,e.hora_final,e.lugar,e.informacion
            from eventos e
            order by e.fecha_evento asc";
            $resultado = mysql_query($consultar_todos,$link);
            echo "<script type='text/javascript'>M.toast({html: 'Evento no encontrado', classes: 'rounded red darken-4 '}); </script> ";
          }
       }      
    }
}else{
        
    if(empty($_GET['id'])){
        if(empty($_GET['filter'])){
            $consultar_todos=" SELECT e.id_evento, e.fecha_evento,e.nombre_evento,e.hora_inicio,e.hora_final,e.lugar,e.informacion
            from eventos e
            order by e.fecha_evento asc";
            $resultado = mysql_query($consultar_todos,$link);
        
        }else{
            $nom=$_GET['filter'];
            $consultaid="
            SELECT e.id_evento,e.fecha_evento,e.nombre_evento,e.hora_inicio,e.hora_final,e.lugar,e.informacion
            from eventos e
            order by e.fecha_evento asc
            limit 1";
            $resultado = mysql_query($consultaid,$link);
        
        }

    }else{
        $nom=$_GET['id'];
        $consultaid="SELECT e.id_evento,e.fecha_evento,e.nombre_evento,e.hora_inicio,e.hora_final,e.lugar,e.informacion
        from eventos e
        where e.nombre_evento='$nom'
        order by e.fecha_evento asc;";
        $resultado = mysql_query($consultaid,$link);
    
    }
}
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
                <li style="border-left:  0;"><a style="margin:0% 0% 0% 15%; color:#CB3232;"><i class="fas fa-search"></i>Consultar evento</a></li>
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
            <img src="Imagenes\eventcons.jpg" class="mx-auto d-block" style="width:100%;"alt="">
        </div>
        <div class="info" style="margin: 0;">
            <div style="margin: 0 32% 0 25%;">
            <!-- ****************************************************************************************-->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row">
                        <div class="input-field col s10">
                            <input placeholder="Buscar..." name="buscador" type="text" class="autocomplete">
                            <button style="background: none;border: none;outline: none;cursor: pointer;color: #d40000;
                            padding: 0;text-decoration: underline;font-family: 'Open Sans Condensed', sans-serif;" type="submit" name="action3" value="update">Mostrar todos</button> 
                        </div>
                        <div class="input-field col s2">
                            <button class="btn waves-effect waves-light red accent-4 center-aling" type="submit" name="action" style="min-width: 10% !important; min-height: 60% !important; position: absolute; border-radius: 0px;margin: 9% 0% 9% 0%;">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>
                </form>
            <!-- ****************************************************************************************-->
            </div>

            <div style="margin: 0 5% 0 5%;">
                <div class="row">
                    <?php
                        while($registros=mysql_fetch_array($resultado))
                        { 
                        extract ($registros);
                        echo"
                        <div class='col l4 m6 s12 '>
                            <div class='card small' style='background-color: #E7E7E7'>
                                <div class='card-content black-text' style='margin-bottom: 0 !important;'>
                                <span class='card-title' style='font-weight: 500;'>$nombre_evento</span>
                                    <p>Fecha: $fecha_evento<br>
                                    Lugar: $lugar<br>
                                    Hora inicio: $hora_inicio<br>
                                    Hora salida: $hora_final<br>
                                    Descripcion: $informacion
                                </div>
                                <div class='card-action red accent-4' style=' margin-bottom: 0 !important;'>
                                <a href='editevent.php?id=$id_evento' style='color: white;'><i class='fas fa-pen'style='margin:0% 1% 0% 0%;'></i>Editar</a>
                                <a href='delete2.php?id=$id_evento' style='color: white;' onclick='return confirmacion()'><i class='fas fa-trash'style='margin:0% 1% 0% 0%;'></i>Eliminar</a>

                                </div>
                            </div>
                        </div>";
                        }
                    ?>
                </div>
            </div>

            <div style="background-color: #EBEBEB;">
                <div class="container">
                    <div class="row" style="margin:1% 0% 1% 0%; bottom: 0;">
                        <div class="col m4 s12 center-align">
                        <h6><h6 style="font-weight: 500;">Direccion:</h6>Av. Carrera 15 No 1-06. Zipaquira</h6>
                        </div>
                        <div class="col m4 s12 center-align " >
                        <h6><h6 style="font-weight: 500;">Telefono:</h6>+57 031 8510005</h6>
                        </div>
                        <div class="col m4 s12 center-align" >
                        <h6><h6 style="font-weight: 500;">Correo:</h6>contactenos@imcrdz.com </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if(isset($_GET['action'])){

    if(empty($_POST['nombre']) || empty($_POST['lugar']) || empty($_POST['fecha']) || empty($_POST['h-ingreso']) ||
    empty($_POST['h-salida']) || empty($_POST['informacion']) ){
      echo "<script>M.toast({html: 'Digite todos los datos', classes: 'rounded red darken-4'}); </script> ";
    }else{
      $nombre=$_POST['nombre'];
      $lugar=$_POST['lugar'];
      $fecha=$_POST['fecha'];
      $h_in=$_POST['h-ingreso'].":00";
      $h_sal=$_POST['h-salida'].":00";
      $info=$_POST['informacion'];
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