<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title></title>
</head>

<body>
    <?php
        //Abrimos conexión a la base de datos
        include ("abrir_conexion.php");
        //$Purchased = round(($Purchased + $consumo_recibo) / 1000000 , 2);
        //$production = round($production / 1000000,2);
        //Seleccionamos la producción y el consumo
        $resultado = $conexion->query("SELECT Produccion, Consumo, LifetimeProd from dunosusa_totales ORDER by Id DESC LIMIT 1");
        $resultado->data_seek(1);
        $fila = $resultado->fetch_assoc();
        $production = $fila['Produccion']; 
        $Purchased = $fila['Consumo'];
        $Lifetime = $fila['LifetimeProd'];
        //echo $production. " <--Produccion   ". $Purchased."<--- Consumo";
        //cerramos conexión
        include ("cerar_conexion.php");
    ?>
</body>
</html>