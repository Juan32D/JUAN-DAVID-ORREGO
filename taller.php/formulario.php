<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document </title>
</head>
<body>
    <h1>registrar</h1>
    <form action ="create.php" method ="post">
        <label for=""> ingrese el primer nombre</label><br>
        <input type = "text" name ="first_name" require><br>

        <label for=""> ingrese el segundo nombre</label><br>
        <input type = "text" name ="second_name" require><br>

        <label for=""> ingrese el primer apellido</label><br>
        <input type = "text" name ="first_surname" require><br>

        <label for=""> ingrese el segundo apellido</label><br>
        <input type = "text" name ="second_surname" require><br>

        <label for=""> ingrese el documento </label><br>
        <input type = "text" name ="email" require><br>

        <label for=""> ingrese el correo </label><br>
        <input type = "text" name ="password" require><br>

        <label for=""> ingrese la contraseña </label><br>
        <input type = "number" name ="phone" require><br>

        <label for=""> ingrese el telefono </label><br>
        <input type = "number" name ="document" require><br>

        <button type="submit">registrar</button>
        
        <!-- Formulario para eliminar un usuario -->
<form action="eliminar.php" method="post">
    <!-- Aquí pones el ID del usuario que quieres eliminar -->
    <input type="hidden" name="id" value="1"> <!-- Reemplaza '1' con el ID del usuario -->
    
    <button type="submit">Eliminar Usuario</button>
</form>




       
</body>
</html>