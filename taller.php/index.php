<?php include "../conexion.php";
$consultas =$conexion->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <a href="formularioRegistro.php">registrarse</a>
    <table border="2">
        <thead>
            <th> Nombres </th>
            <th> Documentos </th>
            <th> Editar </th>
            <th> Eliminar </th>
        </thead>
        <tbody>
        <?php while($user = $consultas->fetch_object()):
        ?>
            <tr>
            <td><?=$user->Name ?></td>
            <td><?=$user->Document ?></td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
        <?php
         endwhile;
        ?>
        </tbody>
    </table>
</body>
</html>