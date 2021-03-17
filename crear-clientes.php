<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar-cliente.php" method="POST">
        Nombre <input type="text" name="nombre"> <br/>
        Edad
        <select name="edad">
            <option value="1">Uno</option>
            <option value="2">dos</option>
            <option value="3">tres</option>
            <option value="4">cuatro</option>
            <option value="5">cinco</option>
            <option value="6">seis</option>
            <option value="7">siete</option>
            <option value="8">ocho</option>
            <option value="9">nueve</option>
            <option value="10">diez</option>
            <option value="11">once</option>
            <option value="12">doce</option>
            <option value="13">trece</option>
        </select>
        Email <input type="text" name="email"> <br/>
        <br/><br/>
        <input type="submit" value="Guardar cliente">
</body>
</html>