<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <style type="text/css">
        body {
            background-image: url(Images/fondo10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
    }
    </style>
</head>

<header>
        <div align="center" class="container">
            <h1>AppVITAE</h1>
        </div>
</header><br>
<!--center>
    <a href="registra.php">Registrarse</a>
</center--><br>
<body>    
<form align="center" action="registrar_usuario.php"  method="post">
        CORREO:&nbsp;&nbsp;<input type="email" name="correoe" id="correoe" placeholder="Ingrese su correo" required size="20"><br><br>
        PASSWORD:&nbsp;&nbsp;<input type="password" name="psw" id="psw" placeholder="Ingrese su password" required size="16"><br><br>
        NOMBRE Y APELLIDO:&nbsp;&nbsp;<input type="text" name="nombrecompleto" id="nombre_completo" placeholder="Ingrese su nombre y apellido" required size="25"><br><br>
<input type="submit" value="Registrarse">

</form>
<div align='center'>
        <div class="panel panel-primary">
                <div class="panel-heading"></div>
                        <div class="panel-body"><br>
                                <a href="index.html"><center><button><B>Volver a menu principal</B></button></a>
                         </div>
                </div>
        </div><br>
</form>
<script src="Js/bootstrap.min.js"></script>
<script src="Js/jquery-3.4.1.min.js"></script>
</body>
</html>


