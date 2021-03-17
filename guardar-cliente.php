<?php
    $Nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $Email = $_REQUEST["email"];

    //1. conectar a la base de datos
    $host = "localhost";
    $dbname = "monster2";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   //2. construir la sentencia sql
    $sql = "INSERT INTO clientes (id, Nombre, edad, Email) VALUES(NULL, '$Nombre', '$edad', '$Email')";

    //3.preparar sentencia sql
    $q = $cnx->prepare($sql);

    //4. ejecutar la sentencia sql

    $result = $q->execute();

    if($result){
        echo "El cliente se guardo correctamente";
    }
    else{
        echo "hubo un error creando el cliente $nombre";
    }
?>