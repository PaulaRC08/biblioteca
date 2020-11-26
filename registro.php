

<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta charset="ISO-8859-1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="animate__swing">Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssPropio/Style.css">
</head>
<body style="background-color:#E1E1E1;">

<script type="text/javascript" src="js/materialize.min.js"></script>
<div class="container">
    <div class="card mb-7" style="max-width: 80%; margin: 3% 8% 0% 12%; ">
      <div class="row no-gutters"  style="margin: 0%;">
        <div class="col">
          <div class="card-body">
            <div class="row "style="margin: 0%;">
                <div class="col">
                <img src="Imagenes/logoB2.png" class="rounded float-left" style="width:100%"alt="">
                </div>
                <div class="col">
                <a class = "float-right"href="iniciars.php"><i class="material-icons" style="font-size: 250%; color: #000000;">chevron_right</i></a>
                </div>
            </div>
            <div class="row text-center" style="margin: 0% 0% 0% 0% ">
                <div class="col">
                <h4 style="font-family: 'Open Sans Condensed', sans-serif !important;">REGISTRARSE</h4>
                </div>
            </div>   
<!--  *********************************************************************************************** -->    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

              <div class="row" style="margin: 0% 0% 0% 0% ">
                <div class="input-field col s6" >
                    <i class="material-icons prefix">face</i>
                    <input placeholder="Digite su nombre" name="nombre_f" type="text" class="validate">
                    <label for="first_name">Nombre </label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite su apellido" name="apellido_f" type="text" class="validate">
                    <label for="first_name">Apellido</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" style="margin: 0% 0% 0% 0% ">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input placeholder="Digite su numero de documento" name="numero_identi_f" type="text" class="validate">
                    <label for="first_name">Numero Documento</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" style="margin: 0% 0% 0% 0% ">
                    <i class="material-icons prefix">location_city</i>
                    <input placeholder="Digite la direccion donde reside" name="direccion_f" type="text" class="validate">
                    <label for="first_name">Direccion</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" style="margin: 0% 0% 0% 0% ">
                  <i class="material-icons prefix">email</i>
                  <input placeholder="Digite su correo" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" style="margin: 0% 0% 0% 0% ">
                    <i class="material-icons prefix">account_circle</i>
                    <input placeholder="Digite su usuario" name="usuario" type="text" class="validate">
                    <label for="first_name">Usuario</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" style="margin: 0% 0% 0% 0% ">
                  <i class="material-icons prefix">lock</i>
                  <input placeholder="Digite su contraseña" name="pass" type="password" class="validate">
                  <label for="password">Contraseña</label>
                </div>
              </div>
              <div class="row text-center">
                <div class="col">
                <button class="btn red accent-4 waves-effect waves-light" type="submit" name="action">INICIAR SESION
                  <i class="material-icons right">arrow_forward</i>
                </button>
                </div>
            </div> 
            </Form>  
<!--  *********************************************************************************************** -->    
          </div>
        </div>
        <div class="col-md-6" style="object-fit: cover;object-position: center center;">
          <img style = "height: 100%;"src="Imagenes/foto.jpg" class="card-img">
        </div>
      </div>
    </div>
  </div>
</body>
</html>


<?php
include("php\phpconect.php");
  if(isset($_POST['action'])){

    if(empty($_POST['nombre_f']) || empty($_POST['apellido_f']) || empty($_POST['numero_identi_f']) ||  empty($_POST['direccion_f'])
    || empty($_POST['email']) || empty($_POST['usuario']) || empty($_POST['pass'])){
      echo "<script>M.toast({html: 'Digite todos los datos', classes: 'rounded red darken-4'}); </script> ";
    }else{
      $nombre=$_POST['nombre_f'];
      $apellido=$_POST['apellido_f'];
      $documento=$_POST['numero_identi_f'];
      $direccion=$_POST['direccion_f'];
      $correo=$_POST['email'];
      $user=$_POST['usuario'];
      $pass=$_POST['pass'];
      $consulta="INSERT INTO `persona` (`numero_identificacion`, `nombre_persona`, `apellido_persona`, `usuario`, `clave`, `direccion`, `correo`) VALUES
      ($documento, '$nombre', '$apellido', '$user', '$pass', '$direccion', '$correo')";
      $resultado = mysql_query($consulta,$link);
      if(!$resultado){
        echo "error de registro";
      }else{
        echo "<script type='text/javascript'>M.toast({html: 'Usuario Registrado!!!', classes: 'rounded green '}); </script> ";
      }
    }
  }

?>
