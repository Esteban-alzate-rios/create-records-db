<?php
    $clientes = $_REQUEST["clientes"];
    $autos = $_REQUEST["autos"];
    $concesionario = $_REQUEST["concesionario"];

    //1. conectar a la base de datos
    $host = "localhost";
    $dbname = "monster2";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   //2. construir la sentencia sql
    $sql = "INSERT INTO registros (id, id_cliente, id_auto, concesionario) VALUES(NULL, '$clientes', '$autos', '$concesionario')";

    //3.preparar sentencia sql
    $q = $cnx->prepare($sql);

    //4. ejecutar la sentencia sql

    $result = $q->execute();

    if($result){
        echo "Inscripcion creada correctamente";
    }
    else{
        echo "hubo un error al inscribir el estudiante $clientes";
    }
?>