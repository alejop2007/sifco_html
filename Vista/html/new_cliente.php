<?php
    include '../../includes/header.php';
    include '../../includes/conexion.php';
    include '../../includes/nav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="font.css">
    <title>Crear Cliente</title>
</head>

<body>
  
    <!--modificar usuario-->
    <div class="agregar-usuario" id="modificar-usuario">
    
        <form action="../../Controlador/create_cliente.php" class="inventario" method="POST">
            <h3>CREAR CLIENTE</h3><br>        
            <label for="consulta-codigo">NOMBRES</label>
            <input class="control-usuario" name="name" type="text" required><br><br>
            <label for="Tipo id">TIPO ID.</label>
            <select name="typeId" id="tipo-id" required>
            <option disabled value="" style="color:white;">Seleccione una opcion</option>
            <option>NIT</option>
            <option>CC</option>
            <option>CE</option>
            </select><br><br>
            <label for="id">IDENTIFICACIÓN</label>
            <input class="control-usuario" name="id" type="text" required ><br><br>
            <label for="consulta-palabra">DIRECCIÓN</label>
            <input class="control-usuario" name="dir" type="text" ><br><br>
            <label for="consulta-palabra">TELÉFONO</label>
            <input class="control-usuario" name="tel" type="text" ><br><br>
            <label for="consulta-palabra">EMAIL</label>
            <input class="control-usuario" name="email" type="email" ><br><br>
            
            
            <input class="boton-consultar" type="submit" value="CREAR">
            <a href="clientes.php"><input class="boton-cancelar" type="button" value="CANCELAR"></a> 

 
         </form>

    </div>
    
</body>

<?php include '../../includes/footer.php' ?>
</html>