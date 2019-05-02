<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ecopulse</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    $enviado = false;
    $nombre = null;
    $clave = null;
    if (isset($_POST['guardar'])) {
        $enviado = true;
        include("abrir_conexion.php");

        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];

        //buscamos si existe el sitio
        $resultado = $conexion->query("SELECT * FROM `Empresas` where Nombre = '$nombre'");
        $num_fila = $resultado->num_rows;

        echo $num_fila;

        if ($num_fila == 0) {
            $conexion->query("insert into Empresas (Nombre, Clave) values ('$nombre','$clave')");

            echo '<script type="text/javascript">
                alert("Registro guardado satisfactoriamente!!");
                window.location.href="agregaEmpresa.php";
                </script>';
            include("cerrar_conexion.php");
        } else {
            echo '<script type="text/javascript">
                alert("La empresa ya está dada de alta");
                </script>';
        }
    }
    ?>
    <div class="container">
        <p>Agregar Empresa</p>
        <form action="/EcopulseImpacto/agregaEmpresa.php" method="post">
            <label for="fname">Nombre</label>
            <input type="text" name="nombre" required value="<?php echo $nombre; ?>">
            <label for="lname">Clave</label>
            <input type="text" name="clave" required value="<?php echo $clave; ?>">
            <input type="submit" value="Guardar" class="button2 button1" name="guardar">

        </form>
    </div>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="text-center">
                <img src="img/energyzed03.gif">
            </div>
        </div>
        <!-- /.container -->
    </footer>


    <?php
    if ($enviado) {
        $nombre = null;
        $clave = null;
    }
    ?>


</body>

</html>