<!DOCTYPE html>
<html>
<head>
  <title>Edit_event</title>
  <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="animate__swing">Biblioteca</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssPropio/Style.css">

</head>
<body style="background-color: #F8F8F8;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script  type="text/javascript">
  $(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
  });
</script>

<script  type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });

  $(document).ready(function(){
    $('.timepicker').timepicker({
            twelveHour:false
        });
  });
        
</script>

<?php
    include("php\phpconect.php");
    $id=$_GET['id'];
    $consulta_datos="select e.id_evento,e.fecha_evento,e.nombre_evento,SUBSTRING_INDEX(e.hora_inicio, ':', 2) as inicio,SUBSTRING_INDEX(e.hora_final, ':', 2) as final,e.lugar,e.informacion
    from eventos e
    where e.id_evento=$id
    order by e.fecha_evento asc;";
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
            <img src="Imagenes\Eventos1.jpg" class="mx-auto d-block" style="width:100%"alt="">
        </div>


        <div class="info">

        <div style="margin: 0% 8% 0% 8%;">
                <div class="row adt no-gutters"  style="margin: 0%;">
                    <div class="col s12" style="margin:0% 5% 0% 5%;">
                        <div class="row">
                <!-- ****************************************************************************************-->
                            <form class="col s12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                            <div class="row">
                                    <?php
                                    $reg=mysql_fetch_array($resultado_registro);
                                    extract ($reg);
                                    echo"
                                    <input placeholder='Digite el nombre del libro' value='$id_evento' name='id' type='hidden' class='validate'>
                                    ";
                                    ?>
                                <div class="input-field col s12" style="margin:2% 0 0 0;">
                                <?php
                                echo"
                                <input placeholder='Digite el nombre del evento' name='nombre' type='text' value='$nombre_evento' class='validate'>";
                                ?>
                                <label for="first_name">Nombre Evento</label>
                                </div>
                            </div>
                            <div class="row" style="margin:0% 0 0 0;">
                                <div class="input-field col s6">
                                <?php
                                echo"
                                <input placeholder='Digite el lugar del evento' name='lugar' type='text' value='$lugar' class='validate'>";
                                ?>
                                <label for="first_name">Lugar</label>
                                </div>
                                <div class="input-field col s6">
                                <?php
                                echo"
                                <input placeholder='Elige la fecha del evento' name='fecha' value='$fecha_evento' type='text' class='datepicker'>";
                                ?>
                                <label for="first_name">Fecha del evento</label>
                                </div>
                            </div>
                            <div class="row" style="margin:0% 0 0 0;">
                                <div class="input-field col s6">
                                    <?php
                                    echo"
                                    <input placeholder='Elige la hora de ingreso' name='h-ingreso' value='$inicio' type='text' class='timepicker'>";
                                    ?>
                                    <label for="first_name">Hora de ingreso</label>
                                </div>
                                <div class="input-field col s6">
                                    <?php
                                    echo"
                                    <input placeholder='Elige la hora de salida' name='h-salida' value='$final' type='text' class='timepicker'>";
                                    ?>
                                    <label for="first_name">Hora de salida</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12" style="margin:2% 0 0 0;">
                                    <?php
                                    echo"
                                <textarea placeholder='Digite la informacion del evento' name='informacion' type='text'  class='materialize-textarea' style >$informacion</textarea>";
                                ?>
                                <label for="first_name">Informacion del Evento</label>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="center-align">
                                    <button style="min-width: 30% !important;" class="btn red accent-4 waves-effect waves-light" type="submit" name="action">EDITAR
                                    <i class="material-icons right">create</i>
                                    </button>
                                    </div>
                                </div>  
                            </div>
                        </form>
            <!-- ****************************************************************************************-->
                        </div>

                </div>
            </div>
        </div>




        
        <div class="wrapper" style="background-color: #EBEBEB;">
        <div class="container">
            <div class="row" style="margin:1% 0% 1% 0%;">
                <div class="col s4 center-align">
                <h6><h6 style="font-weight: 500;">Direccion:</h6>Av. Carrera 15 No 1-06. Zipaquira</h6>
                </div>
                <div class="col s4 center-align " >
                <h6><h6 style="font-weight: 500;">Telefono:</h6>+57 031 8510005</h6>
                </div>
                <div class="col s4 center-align" >
                <h6><h6 style="font-weight: 500;">Correo:</h6>contactenos@imcrdz.com </h6>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>

<?php
  if(isset($_GET['action'])){

    if(empty($_GET['nombre']) || empty($_GET['lugar']) || empty($_GET['fecha']) || empty($_GET['h-ingreso']) ||
    empty($_GET['h-salida']) || empty($_GET['informacion']) ){
      echo "<script>M.toast({html: 'Digite todos los datos', classes: 'rounded red darken-4'}); </script> ";
    }else{
      $id=$_GET['id'];
      $nombre=$_GET['nombre'];
      $lugar=$_GET['lugar'];
      $fecha=$_GET['fecha'];
      $h_in=$_GET['h-ingreso'].":00";
      $h_sal=$_GET['h-salida'].":00";
      $info=$_GET['informacion'];
      $consulta="UPDATE eventos e
      SET e.nombre_evento='$nombre', e.lugar='$lugar', e.fecha_evento='$fecha', e.hora_inicio='$h_in', e.hora_final='$h_sal', e.informacion='$info'
      WHERE e.id_evento = $id";
      $resultado = mysql_query($consulta,$link);
      if(!$resultado){
        echo "error de registro";
      }else{
        header('Location: consultevent.php?id='.urlencode($nombre));
        echo "<script type='text/javascript'>M.toast({html: 'Evento Registrado!!!', classes: 'rounded green '}); </script> ";
      }
    }
  }


?>

</body>
</html>