<?php
    $host = "localhost";
    $dbname = "monster2";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = "SELECT id, Nombre FROM clientes";

    $q = $cnx->prepare($sql);
    $result = $q->execute();
    $clientes = $q->fetchAll();

    $sql = "SELECT id, marca FROM autos";
   
    $q = $cnx->prepare($sql);
    $result = $q->execute();
    $autos = $q->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear registro</title>
</head>
<body>
    <form action="guardar-registro.php" method="POST">
        cliente 
        <select name="clientes" id="">
<?php
            for($i=0; $i<count($clientes); $i++){
?>
            <option value="<?php echo $clientes[$i]["id"] ?>">
                <?php echo $clientes[$i]["Nombre"] ?>
                </option>
<?php
            }
?>
        </select>
        <br/>
        autos 
        <select name="autos" id="">
<?php
            for($i=0; $i<count($autos); $i++){
?>
            <option value="<?php echo $autos[$i]["id"] ?>">
                <?php echo $autos[$i]["marca"] ?>
                </option>
<?php
            }
?>
        </select>
        <br/>
        Concesionario <input type="text" name="concesionario"> <br/>
        
        <input type="submit" value="cliente registrado">
</body>
</html>