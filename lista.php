<!DOCTYPE html>
<html>
<?php
session_start();

if (!isset($_SESSION['USUARIO_LOGUEADO'])){

    echo'<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.html";   </script>';
}
$USUARIO = $_SESSION['LOGIN'];
$NOMBRE = $_SESSION['NOMBRE'];
?>
<div align='center'>
                <div class="panel panel-primary">
                         <div class="panel-heading"></div>
                                 <div class="panel-body">
                                 <a href="cierre_session.php"><center><button><B>Cierre de Session</B></button></a>
                                 <a href="solicitud.php"><button><B>Nueva Solicitud</B></button></a>
                                 <a href="editar_solicitud.php"><button><B>Editar Solicitud</B></button></a>
                         </div>
                 </div>
        </div><br>
    <head>
        <meta charset="UTF-8">
        <title>datos generados</title>
        <link rel="stylesheet" href="Css/bootstrap.min.css">
        <style type="text/css">
        body {
            background-image: url(Images/fondo13.jpg);
            background-repeat: no-repeat;
            background-size: cover;
    }
    </style>
    </head>
    <body>
        <table>
            <tr>
                <td><button>CLAVE</button></td>
                <td><button>NOMBRE Y APELLIDO</button></td>
                <td><button>CORREO ELECTRONICO</button></td>
                <td><button>RUTA DE ARCHIVO</button></td>
                <td><button>MOTIVO</button></td><td>
                <!--td>CODIGO</td--><br>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "SELECT * FROM tb_solicitud";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['ID_SOLICITUD']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['NOMBREINGRESA']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['CORREOINGRESA']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['RUTAPDF']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['MOTIVO']; ?>&nbsp;&nbsp;</td><td>
                <td><a href="userfile.php?id=<?php echo $datos['ID_SOLICITUD']?>">
                <?php echo $datos['NOMBREARCHIVO'] ,' Abrir'; ?></a></td>
            </tr>
                
          <?php  } ?>
<script src="Js/bootstrap.min.js"></script>
<script src="Js/jquery-3.4.1.min.js"></script>
</body>
</html>