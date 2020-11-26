<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="animate__swing">Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
<script type="text/javascript" src="js/materialize.min.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <div class="row">
            <div class="col">
            <img src="Imagenes/logoB3.png" class="mx-auto d-block" style="width:95%"alt="">
            </div>
        </div>
        <div style="margin:15% 0 0 0;">
            <ul>
                <li style="border-left:  0px"><a style="margin:0% 0% 0% 1%; color:#CB3232;"><i class="fas fa-home"></i>Inicio</a></li>
                <div>
                    <h6 style="padding: 15px;border-bottom: 1px solid #CB3232;border-bottom: 1px; solid rgba(0,0,0,0.05);
                     border-top: 1px solid rgba(255,255,255,0.05); color:#CB3232;border-left:  5px solid #CB3232;"><i class="fas fa-book" style="color:#CB3232;margin:0% 8% 0% 0%;"></i>Libros</h6>
                </div>
                  <li><a style='margin:0% 0% 0% 15%;' href='Addbook.php'><i class='fas fa-plus-circle'></i>Agregar libro</a></li>
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
        <div class="info">
            <div class="row" >
                <div class="col-sm">
                    <h4 class="center-align" style="font-weight: 700; color: #D40000;">GENERO DRAMATICO</h4>
                    <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                            <img src="Imagenes/Libros1.jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light red accent-4 pulse"  href="consultbook.php?filt=3"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>Registros de libros ingresados a la plataforma filtrados segun su genero DRAMATICO</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <h4 class="center-align" style="font-weight: 700; color: #D40000;">GENERO NARRATIVO</h4>
                    <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                            <img src="Imagenes/Libros2.jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light red accent-4 pulse" href="consultbook.php?filt=1"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>Registros de libros ingresados a la plataforma filtrados segun su genero NARRATIVO</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <h4 class="center-align" style="font-weight: 700; color: #D40000;">PROXIMO EVENTO</h4>
                    <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                            <img src="Imagenes/Libros3.jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light red accent-4 pulse" href="consultevent.php?filter=2"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>Evento mas proximo a ser realizado en nuestra biblioteca Regional</p>
                            </div>
                        </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>