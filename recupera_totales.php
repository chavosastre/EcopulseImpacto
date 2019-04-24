<?php
    //Abrimos conexión a la base de datos
    include ("abrir_conexion.php");
    //echo "´Hora de inicio: ".date("H:i:s") ." </br>";
    $Production = 0;
    $Consumption = 0;
    $LifeTime = 0;
    //Hacemos la consulta de los id y api keys
    $resultado = $conexion->query("SELECT SiteId, ApiKey, Nombre FROM `vertical`");

    for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--)
    {
        $resultado->data_seek($num_fila);
        $fila = $resultado->fetch_assoc();
        $url =  "https://monitoringapi.solaredge.com/site/".$fila['SiteId']."/energyDetails?meters=Production,Consumption&timeUnit=YEAR&startTime=2019-01-30%2011:00:00&endTime=2019-12-31%2013:00:00&api_key=".$fila['ApiKey']."";
        $json = file_get_contents($url);
        $obj = json_decode($json, true);
        $url2 = "https://monitoringapi.solaredge.com/site/".$fila['SiteId']."/overview?api_key=".$fila['ApiKey']."";
        $json2= file_get_contents($url2);
        $obj2= json_decode($json2, true);

        $LifeTime = $LifeTime + $obj2['overview']['lifeTimeData']['energy'];

        // print_r($url);
        
        //print_r($obj);
        //echo count($obj['energyDetails']['meters'][0]['type'])."</br>";
        for($i=1; $i <= 2; $i++)
        { 
            //Obtenemos el valor del tipo de dato
            $tipo01 = $obj['energyDetails']['meters'][0]['type'];
            //Hacemos la suma correspondiente, dependiendo de que obtiene primero
            if ($tipo01 == 'Production') 
                {
                    $Production = $Production + $obj['energyDetails']['meters'][0]['values'][$i-1]['value'];
                    $Consumption = $Consumption + $obj['energyDetails']['meters'][1]['values'][$i-1]['value'];
                } 
            else 
                {
                    $Production = $Production + $obj['energyDetails']['meters'][1]['values'][$i-1]['value'];
                    $Consumption = $Consumption + $obj['energyDetails']['meters'][0]['values'][$i-1]['value'];
                }
       }
    }
    
    $resultado03 = $conexion->query("SELECT SUM(Consumo) as Consumo FROM `vertical_consumo` VC WHERE VC.Fecha > '2018-11-30'");
    $resultado03->data_seek(1);
    $fila03 = $resultado03->fetch_assoc();
    $consumo_recibo_no_solar = $fila03['Consumo'];
    //  echo ("Produccion Solar: ". $Production."--- Consumo Solar: ".$Consumption."--- Consumo de los recibos: ".$consumo_recibo_no_solar."--- Lifetime Solar : ".$LifeTime."</br>");
    //  echo "Convertido a kilos </br>";
    $Consumption = $Consumption / 1000;
    $Production = $Production / 1000;
    $LifeTime = $LifeTime / 1000;
    //  echo ("Produccion Solar: ". $Production."--- Consumo Solar: ".$Consumption."--- Consumo de los recibos: ".$consumo_recibo_no_solar."--- Lifetime Solar : ".$LifeTime."</br>");
    //  echo "Convertido a megas </br>";
    $consumo_recibo_no_solar = $consumo_recibo_no_solar / 1000;
    $Consumption = $Consumption / 1000;
    $Production = $Production / 1000;
    $LifeTime = $LifeTime / 1000;
    //  echo ("Produccion Solar: ". $Production."--- Consumo Solar: ".$Consumption."--- Consumo de los recibos: ".$consumo_recibo_no_solar."--- Lifetime Solar : ".$LifeTime."</br>");
    //  echo "Sumando consumos </br>";
    $Consumption = $Consumption + $consumo_recibo_no_solar + $Production;
    //  echo ("Produccion Solar: ". $Production."--- Consumo Solar: ".$Consumption."--- Consumo de los recibos: ".$consumo_recibo_no_solar."--- Lifetime Solar : ".$LifeTime."</br>");
    //  echo ("Porcentaje:". ($Production / $Consumption * 100)." </br>");
    
?>