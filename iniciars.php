<!DOCTYPE html>
<html>
<head>
  <title>Ingreso</title>
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
    <div class="card mb-7" style="max-width: 80%; margin: 5% 8% 0% 12%;">
      <div class="row no-gutters"  style="margin: 0%;">
        <div class="col-md-6">
          <img src="Imagenes/foto.jpg" class="card-img">
        </div>
        <div class="col">
          <div class="card-body">
            <div class="row ">
                <div class="col">
                <img src="Imagenes/logoB.png" class="rounded float-right" style="width:50%"alt="">
                </div>
            </div>
            <div class="row text-center" style="margin:25% 0 0 0;">
                <div class="col">
                <h4 style="font-family: 'Open Sans Condensed', sans-serif !important;">INICIAR SESION</h4>
                </div>
            </div>       
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="row">
                <div class="input-field col s12" style="margin: 10% 0% 0% 0% ">
                <i class="material-icons prefix">account_circle</i>
                  <input placeholder="Digite su usuario" name="userI" type="text" class="validate">
                  <label for="first_name">Usuario</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" style="margin: 0% 0% 0% 0% ">
                  <i class="material-icons prefix">lock</i>
                  <input placeholder="Digite su contraseña" name="passI" type="password" class="validate">
                  <label for="password">Contraseña</label>
                </div>
              </div>
              <div class="row text-center">
                <div class="col">
                <button class="btn red accent-4 waves-effect waves-light" type="submit" name="actionI">INICIAR SESION
                  <i class="material-icons right">arrow_forward</i>
                </button>
                </div>
              </div>  
            </Form>  
            <div class="row text-center">
                <div class="col">
                <p style="font-family: 'Open Sans Condensed', sans-serif;">No tienes cuenta?<a style="color: #d50000; font-family: 'Open Sans Condensed', sans-serif;"href="registro.php">REGISTRARSE</a></p>
                </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
include("php\phpconect.php");
  if(isset($_POST['actionI'])){
  $valid=false;
    if(empty($_POST['userI']) || empty($_POST['passI'])){
      echo "<script>M.toast({html: 'Digite todos los datos', classes: 'rounded red darken-4 center-align'});</script> ";
    }else{
      $idp="";
      $userI=$_POST['userI'];
      $passI=$_POST['passI'];
      $consulta_verificar="select p.usuario, p.clave, p.id_persona
      from persona p";
      $resultado = mysql_query($consulta_verificar,$link);

      while($registro=mysql_fetch_array($resultado))
      { 
        extract ($registro);
        if($usuario == $userI && $clave == $passI){
          $valid=true;
          $idp=$id_persona;
        break;
        }
      }

      if($valid == true){
        header('Location: Bienvenida.php?idp='.urlencode($idp));
      }else{
        echo "<script>M.toast({html: 'Los datos son incorrecto', classes: 'rounded red darken-4 center-align'}); </script> ";
      }

    }
  }

?>